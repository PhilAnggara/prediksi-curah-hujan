<script>
  var options = {
  chart: {
    height: 350,
    type: 'bar'
  },
  series: [{
    name: 'Curah Hujan',
    data: [
      30,
      40,
      35,
      50,
      49,
      60,
      70,
    ]
  }],
  xaxis: {
    categories: [
      'Senin, 5 Juli',
      'Selasa, 6 Juli',
      'Rabu, 7 Juli',
      'Kamis, 8 Juli',
      'Jumat, 9 Juli',
      'Sabtu, 10 Juli',
      'Minggu, 11 Juli']
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();

</script>