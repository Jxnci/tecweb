<template>
  <section class="text-gray-800">
    <div class="container grid grid-cols-1 gap-6 mx-auto sm:grid-cols-2 xl:grid-cols-4">
      <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-gray-50 text-gray-800">
        <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
            class="h-9 w-9 text-gray-100">
            <polygon
              points="160 96.039 160 128.039 464 128.039 464 191.384 428.5 304.039 149.932 304.039 109.932 16 16 16 16 48 82.068 48 122.068 336.039 451.968 336.039 496 196.306 496 96.039 160 96.039">
            </polygon>
            <path
              d="M176.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,176.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,176.984,464.344Z">
            </path>
            <path
              d="M400.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,400.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,400.984,464.344Z">
            </path>
          </svg>
        </div>
        <div class="flex flex-col justify-center align-middle">
          <p class="text-3xl font-semibold leadi" v-if="datosdsh">{{ datosdsh.numeroPrestamos }}</p>
          <p class="capitalize">Prestamos Realizados</p>
        </div>
      </div>
      <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-gray-50 text-gray-800">
        <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
            class="h-9 w-9 text-gray-100">
            <path
              d="M256,16C123.452,16,16,123.452,16,256S123.452,496,256,496,496,388.548,496,256,388.548,16,256,16ZM403.078,403.078a207.253,207.253,0,1,1,44.589-66.125A207.332,207.332,0,0,1,403.078,403.078Z">
            </path>
            <path d="M256,384A104,104,0,0,0,360,280H152A104,104,0,0,0,256,384Z"></path>
            <polygon
              points="205.757 228.292 226.243 203.708 168 155.173 109.757 203.708 130.243 228.292 168 196.827 205.757 228.292">
            </polygon>
            <polygon
              points="285.757 203.708 306.243 228.292 344 196.827 381.757 228.292 402.243 203.708 344 155.173 285.757 203.708">
            </polygon>
          </svg>
        </div>
        <div class="flex flex-col justify-center align-middle">
          <p class="text-3xl font-semibold leadi" v-if="datosdsh">{{ datosdsh.numeroPersonas }}</p>
          <p class="capitalize">Personas Atendidas</p>
        </div>
      </div>
      <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-gray-50 text-gray-800">
        <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
            class="h-9 w-9 text-gray-100">
            <path
              d="M425.706,142.294A240,240,0,0,0,16,312v88H160V368H48V312c0-114.691,93.309-208,208-208s208,93.309,208,208v56H352v32H496V312A238.432,238.432,0,0,0,425.706,142.294Z">
            </path>
            <rect width="32" height="32" x="80" y="264"></rect>
            <rect width="32" height="32" x="240" y="128"></rect>
            <rect width="32" height="32" x="136" y="168"></rect>
            <rect width="32" height="32" x="400" y="264"></rect>
            <path
              d="M297.222,335.1l69.2-144.173-28.85-13.848L268.389,321.214A64.141,64.141,0,1,0,297.222,335.1ZM256,416a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,416Z">
            </path>
          </svg>
        </div>
        <div class="flex flex-col justify-center align-middle">
          <p class="text-3xl font-semibold leadi" v-if="datosdsh">{{ datosdsh.numeroLibros }}</p>
          <p class="capitalize">libros Registrados</p>
        </div>
      </div>
      <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-gray-50 text-gray-800">
        <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
            class="h-9 w-9 text-gray-100">
            <path
              d="M454.423,278.957,328,243.839v-8.185a116,116,0,1,0-104,0V312H199.582l-18.494-22.6a90.414,90.414,0,0,0-126.43-13.367,20.862,20.862,0,0,0-8.026,33.47L215.084,496H472V302.08A24.067,24.067,0,0,0,454.423,278.957ZM192,132a84,84,0,1,1,136,65.9V132a52,52,0,0,0-104,0v65.9A83.866,83.866,0,0,1,192,132ZM440,464H229.3L79.141,297.75a58.438,58.438,0,0,1,77.181,11.91l28.1,34.34H256V132a20,20,0,0,1,40,0V268.161l144,40Z">
            </path>
          </svg>
        </div>
        <div class="flex flex-col justify-center align-middle">
          <p class="text-3xl font-semibold leadi" v-if="datosdsh">{{ datosdsh.numeroAutores }}</p>
          <p class="capitalize">Autores Disponibles</p>
        </div>
      </div>
    </div>
  </section>

  <div class="w-full bg-gray-50 border rounded-md h-full py-2 ps-4 my-4 flex gap-2">
    <div class="flex justify-center w-full text-center h-96">
      <!-- <Line :data="chartData" :options="chartOptions" /> -->
      <canvas ref="chartCanvas"></canvas>
    </div>
  </div>
</template>

<script setup>

import { onMounted, ref } from "vue";
import ReportesService from "../services/ReportesService.js";

import { Chart } from 'chart.js/auto';

const chartCanvas = ref(null);

const labels = [];
const chartData = ref({
  labels: labels,
  datasets: [{
    label: '# de Préstamos',
    data: [], // Inicialmente vacío, se llenará después
    backgroundColor: 'rgba(75, 192, 192, 0.2)',
    borderColor: 'rgba(75, 192, 192, 1)',
    borderWidth: 1
  }]
});

const options = {
  scales: {
    y: {
      beginAtZero: true
    }
  }
};



const datosdsh = ref([])
const service = new ReportesService();
let myChart = null; 

onMounted(async () => {
  try {
    datosdsh.value = await service.fetchReportes();
    const datos = await service.fetchReportes();
    
    // Actualiza los datos del gráfico
    chartData.value.datasets[0].data = datos.datosMensuales;

    // Si ya existe un gráfico, destrúyelo antes de crear uno nuevo
    if (myChart) {
      myChart.destroy();
    }

    // Inicializa el gráfico
    myChart = new Chart(chartCanvas.value, {
      type: 'line', // Cambia el tipo de gráfico según tus necesidades
      data: chartData.value,
      options
    });
  } catch (error) {
    console.error('Error fetching chart data:', error);
  }
});

</script>