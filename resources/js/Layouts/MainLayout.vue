<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <div class="page flex">
    <div class="sidebar">
        <div class="navbar ">
            <img class="image w-40 h-40 rounded-full" src="https://scontent.fceb1-3.fna.fbcdn.net/v/t39.30808-1/441320575_25356270734016489_8659060318001040656_n.jpg?stp=dst-jpg_p200x200&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHcPzBGVONWPkQLIohAN-AQB9MMvVU-HDcH0wy9VT4cNw662WaYX0XvoogrkJkt-EJBAzjalyOegUCk7y0UyRGz&_nc_ohc=2nzYgDct_CoQ7kNvgFJ-HEC&_nc_ht=scontent.fceb1-3.fna&oh=00_AYAUYoSHECOdGWp4O96EjBVNJDDp996pBIa39qGHvOBOAQ&oe=66510896" alt="">

        </div>
        <h1>ARTtisan</h1>
       


    <nav class="item-center2 " >
        <Link class="btn1 bg-white-300 w-[100%] p-3 text-center hover:bg-gray-700 hover:opacity-75  transition ease-linear duration-150" href="/">
            <div class="flex items-center space-x-10 text-[1rem]">
                <svg class="icon w-[1.3rem] filter brightness-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="white" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                </svg>
                <span>Home</span>
            </div>
        </Link>


        <Link class="btn1 bg-white-300 w-[100%] p-3 text-center hover:bg-gray-700 hover:opacity-75   transition ease-linear duration-150" href="/artworks">
            <div class="flex items-center space-x-10 text-[1rem] ">
                <svg class="icon w-[1.3rem] filter brightness-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="white" d="M512 256c0 .9 0 1.8 0 2.7c-.4 36.5-33.6 61.3-70.1 61.3H344c-26.5 0-48 21.5-48 48c0 3.4 .4 6.7 1 9.9c2.1 10.2 6.5 20 10.8 29.9c6.1 13.8 12.1 27.5 12.1 42c0 31.8-21.6 60.7-53.4 62c-3.5 .1-7 .2-10.6 .2C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-96a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm96 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
              <span>Artworks</span>
             </div>
        </Link>


        <Link class="btn1 bg-white-300 w-[100%] p-3 text-center hover:bg-gray-700 hover:opacity-75  transition ease-linear duration-150" href="/portfolio">
            <div class="flex items-center space-x-10 text-[1rem] ">
                <svg class="icon w-[1.3rem] filter brightness-75"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="white" d="M384 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H384zM96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H208zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
              <span>Portfolio</span>
             </div>
        </Link>

        <Link class="btn1 bg-white-300 w-[100%] p-3 text-center hover:bg-gray-700 hover:opacity-75  transition ease-linear duration-150" href="/qrcode">
            <div class="flex items-center space-x-10 text-[1rem] ">
                <svg class="icon w-[1.3rem] filter brightness-75"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="white" d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z"/></svg>
              <span>SQ Scanner</span>
             </div>
        </Link>
    </nav>
    </div>

 

    <div class="content  bg-gray-900 flex flex-col w-full h-screen">
          <div class="flex-1 overflow-auto max-h-[100vh] flex-wrap">
            <Transition name="page-trans" mode="out-in"> 
            <slot />
        </Transition>
          </div>

            <div>
        
        </div>

    </div>   
  
    </div>
    

</template>

<style scoped>

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
}


.image {
    margin: 50px;
    padding: 15px;
    border-radius: 50%;
    background-color: rgb(21, 20, 23) ;
}

.icon {
    margin-left: 20px;
}
.page {
    background-color: skyblue;
}

.sidebar{
    background-color: rgb(21, 20, 23) ;
    height: 100vh;
    width: 270px;
}

.navbar{
    width: 270px;
    transform: translateY(-30px);
}



.item-center2 {
    flex-direction: column; 
    padding: 10px;
    color: white;
    display: flex;
    gap: 30px;
    justify-content: center;
    align-items: center; 
    transform: translateY(-30px);
}



h1 {
    font-size: 21px;
    font-weight: 500;
    color: rgb(212, 212, 212);
    display: flex;
    justify-content: center;
    transform: translateY(-95px);
    letter-spacing: 3px;
    font-family: 'Quicksand', sans-serif;

}

span {
    color: rgb(242, 242, 242);
    transform: translateX(15px);
    letter-spacing: 2px;
    font-weight: 300;
    font-family: 'Quicksand', sans-serif;

}
.content {
    position: relative;
    z-index: 1; /* Ensure content is above the pseudo-element */
}

.content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('https://img.freepik.com/free-photo/black-background-with-leaves-vegetation-texture_23-2149872516.jpg?w=1380&t=st=1716248172~exp=1716248772~hmac=c01100ace197e475e7bd9849db34b222f11633d0dbcbe0af38dd2c2ed92857e3');
    background-size: cover;
    background-position: center;
    opacity: 0.5; /* Adjust the opacity here */
    z-index: -1; /* Ensure the pseudo-element is behind the content */
}




</style>