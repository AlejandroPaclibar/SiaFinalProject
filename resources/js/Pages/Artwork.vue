<script setup>
import { ref, onMounted, watch, nextTick } from 'vue';
import Papa from 'papaparse';
import MainLayout from '@/Layouts/MainLayout.vue';
import { useForm } from '@inertiajs/vue3';
import QRCode from 'qrcode';

defineOptions({
  layout: MainLayout
});

const props = defineProps({
  artworks: Array
});

const selectedArt = ref(null);
const isModalVisible = ref(false);

const showArtDetails = async (art) => {
  selectedArt.value = art;
  isModalVisible.value = true;
  await nextTick();
  generateQRCodeForModal(art);
};

const closeModal = () => {
  isModalVisible.value = false;
};

const form = useForm({
  import_file: null
});

const importFile = (event) => {
  const file = event.target.files[0];
  if (!file) return;

  form.import_file = file;
  form.post(route('artworks.import'), {
    onSuccess: () => {},
    onError: () => {}
  });
};

const generateQRCodes = () => {
  props.artworks.forEach((art) => {
    const qrcodeContainer = document.getElementById(`qrcode_${art.id}`);
    if (qrcodeContainer) {
      QRCode.toDataURL(`${art.art_name} ${art.price}`, { width: 100, height: 100 })
        .then(url => {
          qrcodeContainer.src = url;
        })
        .catch(err => {
          console.error("Error generating QR code:", err);
        });
    }
  });
};

const generateQRCodeForModal = async (art) => {
  const qrcodeContainer = document.getElementById(`modal-qrcode_${art.id}`);
  if (qrcodeContainer) {
    QRCode.toDataURL(`${art.art_name} $${art.price}`, { width: 100, height: 100 })
      .then(url => {
        qrcodeContainer.src = url;
      })
      .catch(err => {
        console.error("Error generating QR code:", err);
      });
  }
};

onMounted(() => {
  generateQRCodes();
});
</script>



<template>
  <div>
    <div class="mt-10 flex">
      <a href="artworks/csv-all" target="_blank" class="px-2.5 py-2 rounded bg-blue-900 text-white ml-5">Download CSV</a>
      <button class="px-2.5 py-2 rounded bg-blue-900 text-white ml-5 max-w-[106px]">
        <label for="import_file" class="cursor-pointer">Import CSV</label>
        <input type="file" id="import_file" @change="importFile" class="hidden">
      </button>
      <a href="artworks/pdf" class="pdf px-2.5 py-2 rounded bg-blue-900 text-white ml-5">Export to PDF</a>
    </div>

    <div class="art-cards-container">
      <div class="art-card" v-for="(art, index) in artworks" :key="art.id" @click="showArtDetails(art)">
        <div class="art-image-container">
          <img :src="art.imageUrl" alt="Art Image" class="art-image" />
        </div>
        <div class="art-details">
          <h3 class="art-name">{{ art.art_name }}</h3>
          <p class="art-price">${{ art.price }}</p>
        </div>
      </div>
    </div>

    <transition name="zoom">
      <div v-if="isModalVisible" class="modal-overlay" @click="closeModal">
        <div class="modal-content" @click.stop>
          <span class="close-button" @click="closeModal">&times;</span>
          <img :src="selectedArt.imageUrl" alt="Art Image" class="modal-image" />
          <div class="modal-info">
            <h3 class="modal-name">{{ selectedArt.art_name }}</h3>
            <p class="modal-description">{{ selectedArt.description }}</p>
            <img :id="'modal-qrcode_' + selectedArt.id" alt="QR Code" class="modal-qrcode w-[6rem] h-[6rem]">
            <p class="modal-price">${{ selectedArt.price }}</p>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>


<style scoped>

.pdf {
  margin-left: 65%;
}
.art-cards-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 3%;
}

.art-card {
  position: relative;
  width: calc(30% - 16px);
  height: 250px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 15px rgba(27, 27, 27, 0.1);
  margin-bottom: 3%;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.art-card:hover {
  transform: translateY(-5px);
}

.art-image-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.art-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.art-details {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  font-size: 12px;
  transition: background-color 0.3s ease;
}

.art-details:hover {
  color: rgba(30, 203, 30, 0.634);
  background-color: rgba(0, 0, 0, 0.7);
}

.art-name {
  font-size: 1.2em;
  font-family: 'Quicksand', sans-serif;
  margin: 0;
  letter-spacing: 1px;
  font-weight: 400;
}

.art-description {
  margin: 8px 0;
  font-family: "Roboto Condensed", sans-serif;
  font-size: 10px;
  letter-spacing: 1px;
}

.art-price {
  font-weight: bold;
  margin-top: 8px;
  color: white;
  font-size: 13px;
  letter-spacing: 2px;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  background: white;
  padding: 20px;
  border-radius: 10px;
  position: relative;
  max-width: 350px;
  width: 90%;
  height: 65%;
  text-align: center;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.332);
}

.close-button {
  position: absolute;
  top: -12px;
  right: 5px;
  font-size: 2em;
  cursor: pointer;
}

.modal-image {
  width: 100%;
  max-width: 400px;
  height: 250px;
  object-fit: cover;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.332);
}

.modal-info {
  margin-top: 20px;
}

.modal-name {
  font-family: 'Quicksand', sans-serif;
  font-size: 1.3em;
  font-weight: 500;
  transform: translateY(-10px);
  margin-top: 15px;
}

.modal-description {
  margin: 5px 0;
  transform: translateY(-10px);
  font-size: 13px;
}

.modal-price {
  font-weight: bold;
  color: #000;
  font-size: 1.2em;
  transform: translateY(-70px);
}

/* .modal-qrcode {
  transform: translateY(-5px);
} */

@keyframes zoom-in {
  0% {
    transform: scale(0.9);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes zoom-out {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(0.9);
    opacity: 0;
  }
}

.zoom-enter-active {
  animation: zoom-in 0.3s ease-out;
}

.zoom-leave-active {
  animation: zoom-out 0.3s ease-out;
}
</style>
