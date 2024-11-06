<script>
import '../../css/app.css';
import PhotoComponent from '../Components/PhotoComponent.vue';

export default {
    name: 'Mainpage',
    components: {
        PhotoComponent,
    },
    data() {
        return {
            showMenu: false,
        };
    },
};
</script>

<template>
  <div class="banner-1">
    <!-- NavBar -->
    <nav class="container px-6 mx-auto md:flex md:justify-between md:items-center">
      <div class="flex items-center justify-between">
        <div class="relative w-16 h-16">
          <img
            class="rounded-full border border-gray-100 shadow-sm"
            src="../../../public/Assets/1688841381967.jpeg"
            alt="user image"
          />
        </div>
        <!-- Mobile menu button -->
        <div @click="showMenu = !showMenu" class="flex md:hidden">
          <button
            type="button"
            class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
          >
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
              <path
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2z"
              ></path>
            </svg>
          </button>
        </div>
      </div>
      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <ul :class="showMenu ? 'flex' : 'hidden'" class="flex-col items-end mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
        <li class="menu-button"><a href="#">Home</a></li>
        <li class="menu-button"><a href="#work" v-smooth-scroll>Projects</a></li>
        <li class="menu-button"><a href="#volunteering" v-smooth-scroll>Volunteering</a></li>
        <li class="menu-button"><a href="#about" v-smooth-scroll>About</a></li>
      </ul>
    </nav>
    <!-- End Navbar -->

    <div class="flex items-center">
      <div class="w-11/12 space-y-5 md:space-y-3">
        <h3 class="hello-button text-gray-700 w-fit md:py-3 md:px-5 py-1 px-2 rounded-lg 3xl:text-3xl 2xl:text-xl lg:text-xl md:text-md text-sm font-semibold font-work_sans">
          👋 Hello,
        </h3>
        <h1 class="3xl:text-8xl 2xl:text-7xl xl:text-6xl lg:text-4xl md:text-3xl sm:text-3xl text-xl font-Eczar font-bold leading-tight text-gray-700">
          I'm <a href="https://www.linkedin.com/in/gabriel-velazquez-berrueta-53a3b925a/" target="_blank" class="text-black hover:underline">Gabriel Velazquez Berrueta</a>🦭<br />Software Engineer Student & Developer
        </h1>

        <div class="md:flex gap-1 md:gap-10">
          <a href="https://github.com/Sweet217" target="_blank" rel="noopener noreferrer">
            <button class="text-white submit-button mb-5 md:mb-0 bg-gray-800">
              View My Projects
            </button>
          </a>
          <a href="https://www.instagram.com/_gabriel.vb/" target="_blank" rel="noopener noreferrer">
            <button class="border-gray-800 submit-button mb-5 md:mb-0">
                Contact Me
            </button>
          </a>
        </div>
      </div>
      <div class="w-8/12 flex justify-center">
        <img src="../../../public/Assets/yo__1_-removebg-preview (1).png" style="height: auto; width: auto; max-width: 210px;">
      </div>
    </div>
  </div>

  <div class="banner-2 space-y-10 pb-20" id="work">
    <h3 class="heading3 my-5">Highlighted Projects</h3>

    <div class="card">
      <!-- Image Section -->
      <div class="card-image md:w-1/2 flex items-center justify-center">
        <img class="rounded-2xl object-contain max-h-40 md:max-h-60" src="../../../public/Assets/solytec_page.png" />
      </div>
    
      <!-- Content Section -->
      <div class="space-y-5 py-8 px-8 md:py-16 md:px-20 md:w-1/2">
        <h4 class="project-title item">Solytec Landpage</h4>
        <p class="font-work_sans pr-12">A landpage for Solytec, also maintaining it and giving it updates as requested.</p>
        <a href="https://solytecmx.com/" target="_blank" rel="noopener noreferrer">
          <button class="text-sky-800 font-bold text-2xl tracking-wider">
            View Project
          </button>
        </a>
      </div>
    </div>
    

    <div class="card">
      <div class="space-y-5 py-8 px-8 md:py-16 md:px-20 md:w-1/2">
        <h4 class="project-title item">Solytec Web App For Dynamic Ads</h4>
        <p class="font-work_sans pr-12">Developed a dynamic web application for managing ads, utilizing Vue and Laravel for frontend and backend integration.</p>
        <a href="https://pd.solytecmx.com/" target="_blank" rel="noopener noreferrer">
          <button class="text-sky-800 font-bold text-2xl tracking-wider">
            View Project
          </button>
        </a>
      </div>
      <div class="card-image md:w-1/2 flex items-center justify-center">
        <img class="object-contain max-h-40 md:max-h-60 rounded-2xl" src="../../../public/Assets/pd_solytec_page.png" />
      </div>
    </div>

    <div class="card">
      <div class="card-image md:w-1/2 flex items-center justify-center">
        <img class="rounded-2xl object-contain max-h-40 md:max-h-60" src="../../../public/Assets/Solytec-PD-1-150x150.png" />
      </div>
      <div class="space-y-5 py-8 px-8 md:py-16 md:px-20 md:w-1/2">
        <h4 class="project-title item">Solytec Ads Player</h4>
        <p class="font-work_sans pr-12">An app that let you register devices with licenses generated in the web app, as well as reproducing the multimedia from the lists created in the web app, App created using Python.</p>
        <a href="https://solytecmx.com/#pd" target="_blank" rel="noopener noreferrer">
          <button class="text-sky-800 font-bold text-2xl tracking-wider">
            View Project
          </button>
        </a>
      </div>
    </div>

    <div class="card">
      <div class="space-y-5 py-8 px-8 md:py-16 md:px-20 md:w-1/2">
        <h4 class="project-title item">DERMA-PRO</h4>
        <p class="font-work_sans pr-12">A machine learning app that compares skin data to detect potential melanoma. (This project is for learning purposes.)</p>
        <a href="https://github.com/Sweet217/dermapro" target="_blank" rel="noopener noreferrer">
          <button class="text-sky-800 font-bold text-2xl tracking-wider">
            View Project
          </button>
        </a>
      </div>
      <div class="card-image md:w-1/2 flex items-center justify-center">
        <img class="rounded-2xl object-contain max-h-40 md:max-h-60" src="../../../public/Assets/dermapro.png" />
      </div>
    </div>
  </div>
  
  <div class="banner-3 space-y-10 pb-20 bg-opacity-50" id="volunteering">
    <h3 class="heading3 my-5">Volunteering</h3>

    <div class="card">
      <!-- Image Section -->
      <div class="card-image md:w-1/2 flex items-center justify-center">
        <img class="rounded-2xl object-contain max-h-40 md:max-h-60" src="../../../public/Assets/LevelBeta.png" />
      </div>
    
      <!-- Content Section -->
      <div class="space-y-5 py-8 px-8 md:py-16 md:px-20 md:w-1/2">
        <h4 class="project-title item">Microsoft Student Ambassador</h4>
        <h1 class="font-work_sans pr-16 text-xl">Rank: Beta</h1>
        <p class="font-work_sans pr-12">Student Ambassadors are a global group of campus leaders who are eager to help fellow students, create robust tech communities and develop technical and career skills for the future.</p>
        <a href="https://mvp.microsoft.com/studentambassadors/certificate/904821f4-e63a-45c8-a413-6996a40c8893" target="_blank" rel="noopener noreferrer">
          <button class="text-sky-800 font-bold text-2xl tracking-wider">
            View Certificate
          </button>
        </a>
      </div>
    </div>
  </div>

  <div class="banner-4 pb-5" id="about">
    <h3 class="heading3 my-5">About Me</h3>
    <div class="space-y-0 mt-5 md:mt-0 pb-5">
      <div class="flex items-center justify-between">
        <p class="font-work_sans text-gray-800 leading-loose max-w-xs text-left">I'm a motivated software engineering student at Universidad de Colima with a passion for full-stack development and AI prompt engineering.</p>
        <div class="flex justify-center items-center mx-4">
          <PhotoComponent class="pb-5 hidden md:hidden lg:block"></PhotoComponent>
        </div>
        <p class="font-work_sans text-gray-800 leading-loose max-w-xs text-right">I have over six months of experience in building web and desktop applications, emphasizing user-centered design and functionality.</p>
      </div>
    </div>
  </div>
  
</template>
