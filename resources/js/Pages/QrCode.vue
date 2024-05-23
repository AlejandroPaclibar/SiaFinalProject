<template>
  <div class="scanner-container">
    <h1>QR Code Scanner</h1>
    <div id="reader" class="reader flex"></div>
    <div class="button-container">
      <button class="px-2.5 py-2 rounded bg-blue-900 text-white ml-2" :class="{ 'scanning': scanning }" @click="startScanner">{{ scanning ? 'Stop Scanner' : 'Start Scanner' }}</button>
     
    </div>
    <div class="result" v-if="resultText">
      <h2>Scanned Result:</h2>
      <p>{{ resultText }}</p>
    </div>
    <p v-if="qrCodeMessage">QR Code Result: {{ qrCodeMessage }}</p>
  </div>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { ref } from 'vue';
import { Html5Qrcode,  } from 'html5-qrcode';

const scanning = ref(false);
const resultText = ref('');
const qrCodeMessage = ref('');
let html5QrcodeScanner = null;

defineOptions({
  layout: MainLayout
});

const startScanner = async () => {
  if (!scanning.value) {
    scanning.value = true;
    resultText.value = ''; // Clear previous result

    const config = { fps: 10, qrbox: 250 };
    html5QrcodeScanner = new Html5Qrcode("reader");

    try {
      await html5QrcodeScanner.start(
        { facingMode: "environment" }, 
        config,
        (decodedText, decodedResult) => {
          resultText.value = decodedText;
          stopScanner();
        },
        (errorMessage) => {
          console.warn(`QR Code no longer in front of camera.`);
        }
      );
    } catch (err) {
      console.error(err);
      scanning.value = false;
    }
  } else {
    stopScanner();
  }
};

const stopScanner = () => {
  if (html5QrcodeScanner) {
    html5QrcodeScanner.stop().then(() => {
      html5QrcodeScanner.clear();
    }).catch((err) => {
      console.error(err);
    });
  }
  scanning.value = false;
};

</script>

<style scoped>
.scanner-container {
  text-align: center;
  padding: 20px;
  margin-top: 8%;
}

.reader {
  margin: 20px auto;
  width: 300px;
  height: 300px;
  border: 1px solid #ccc;
  background-color: #020202;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button-container {
  margin-top: 10px;
  display: flex;
  justify-content: center;
}

.button-container button,
.file-input label {
  margin-right: 10px;
}

.file-input {
  margin-top: 0;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

button.scanning {
  background-color: #ff0000;
}

button.scanning:hover {
  background-color: #b00e0e;
}

button:hover {
  background-color: #0056b3;
}

.file-input label {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  cursor: pointer;
  border-radius: 5px;
}

.file-input label:hover {
  background-color: #0056b3;
}

.file-input input {
  display: none;
}

.result {
  margin-top: 20px;
  font-size: 18px;
  color: white;
}

h1 {
  color: white;
  letter-spacing: 2px;
  word-spacing: 1pc;
  font-size: 30px;
  font-family: 'Quicksand', sans-serif;
  font-weight: 400;
}
</style>
