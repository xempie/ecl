/* Template Name: Techwind - Laravel 12 Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 3.0.0
   Created: May 2022
   File Description: For Apex Chart
*/

/* global ApexCharts */

(() => {
    try {
        const chartElement = document.querySelector("#mainchart");

        if (!chartElement) {
            // Chart container not found, silently exit
            return;
        } else {
            const options1 = {
                series: [
                    {
                        name: 'Profit',
                        data: [500, 653, 548, 482, 553, 570, 560, 610, 580, 854, 945, 1150],
                    },
                    {
                        name: 'Expenses',
                        data: [246, 379, 521, 453, 243, 264, 333, 246, 468, 222, 456, 789]
                    }
                ],
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: {
                        show: false,
                        autoSelected: 'zoom'
                    },
                },
                grid: {
                    strokeDashArray: 5,
                },
                plotOptions: {
                    bar: {
                        borderRadius: 5,
                        horizontal: false,
                        columnWidth: '40%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                colors: ['#4f46e5', '#10b981'],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                },
                yaxis: {
                    title: {
                        text: 'Profit / Expenses (USD)',
                        style: {
                            colors: ['#8492a6'],
                            fontSize: '16px',
                            fontFamily: 'Nunito, sans-serif',
                            fontWeight: 600,
                        },
                    },
                },
                fill: {
                    opacity: 1,
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$" + val;
                        }
                    }
                }
            };

            const chart1 = new ApexCharts(chartElement, options1);
            chart1.render();
        }
    } catch (error) {
        console.error("Error initializing ApexChart:", error);
    }
})();

//E-Commerce Dashboard

(function initChart() {
  try {
      const chartContainer = document.querySelector("#ecommerce-chart");

      if (!chartContainer) {
          return;
      }

      const options = {
          chart: {
              height: 314,
              type: 'area',
              width: '100%',
              stacked: true,
              toolbar: {
                  show: false,
                  autoSelected: 'zoom'
              },
          },
          colors: ['#4f46e5', '#16a34a'],
          dataLabels: {
              enabled: false
          },
          stroke: {
              curve: 'smooth',
              width: [1, 1],
              dashArray: [3, 3],
              lineCap: 'round',
          },
          grid: {
              padding: {
                  left: 0,
                  right: 0
              },
              strokeDashArray: 4,
          },
          markers: {
              size: 0,
              hover: {
                  size: 0
              }
          },
          series: [
              {
                  name: 'Item Sales',
                  data: [0, 100, 40, 110, 60, 140, 55, 130, 65, 180, 75, 115],
              },
              {
                  name: 'Revenue',
                  data: [0, 45, 10, 75, 35, 94, 40, 115, 30, 105, 65, 110],
              }
          ],
          xaxis: {
              type: 'category',
              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              axisBorder: {
                  show: true,
              },
              axisTicks: {
                  show: true,
              },
          },
          fill: {
              type: "gradient",
              gradient: {
                  shadeIntensity: 0.8,
                  opacityFrom: 0.5,
                  opacityTo: 0.3,
                  stops: [0, 80, 100]
              }
          },
          tooltip: {
              x: {
                  show: false
              },
          },
          legend: {
              position: 'bottom',
              offsetY: 0,
          },
      };

      const chart = new ApexCharts(chartContainer, options);
      chart.render();

  } catch (error) {
      console.error("E-Commerce chart initialization error:", error);
  }
})();

(function initTopProductChart() {
    try {
        const chartContainer = document.querySelector("#top-product-chart");
        if (!chartContainer) {
            return;
        }

        const options = {
            chart: {
                height: 320,
                type: 'donut',
            },
            series: [45, 21, 23, 28],
            labels: ["Item 1", "Item 2", "Item 3", "Item 4"],
            legend: {
                show: true,
                position: 'bottom',
                offsetY: 0,
            },
            dataLabels: {
                enabled: true,
                dropShadow: {
                    enabled: false,
                }
            },
            stroke: {
                show: true,
                colors: ['transparent'],
            },
            theme: {
                monochrome: {
                    enabled: true,
                    color: '#4f46e5',
                }
            },
            responsive: [
                {
                    breakpoint: 768,
                    options: {
                        chart: {
                            height: 400,
                        },
                    }
                }
            ]
        };

        const chart = new ApexCharts(chartContainer, options);
        chart.render();
    } catch (error) {
        console.error("Donut chart initialization error:", error);
    }
})();

//CryptoCurrency

function renderSparklineChart(selector, data, color) {
  try {
    const chartElement = document.querySelector(selector);
    if (!chartElement) {
      return;
    }
    const options = {
      series: [{ data }],
      chart: {
        type: 'area',
        height: 90,
        width: '100%',
        sparkline: { enabled: true }
      },
      stroke: {
        curve: 'smooth',
        width: 3,
      },
      colors: [color],
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          inverseColors: false,
          opacityFrom: 0.45,
          opacityTo: 0.05,
          stops: [20, 100, 100, 100]
        },
      },
      tooltip: {
        fixed: { enabled: false },
        x: { show: false },
        y: { title: { formatter: () => '' } },
        marker: { show: false }
      }
    };
    const chart = new ApexCharts(chartElement, options);
    chart.render();
  } catch (error) {
    console.error(`Error rendering sparkline chart ${selector}:`, error);
  }
}

// Call your charts safely:
renderSparklineChart("#chart-1", [20, 45, 40, 64, 35, 25, 35], '#059669');
renderSparklineChart("#chart-2", [10, 25, 30, 54, 45, 39, 15], '#dc2626');
renderSparklineChart("#chart-3", [15, 20, 10, 45, 20, 10, 5], '#059669');
renderSparklineChart("#chart-4", [3, 5, 7, 11, 8, 5, 7], '#dc2626');
renderSparklineChart("#chart-5", [20, 14, 24, 30, 16, 12, 8], '#dc2626');
renderSparklineChart("#chart-6", [4, 7, 15, 10, 8, 12, 18], '#059669');