<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include_once('../config/head.php'); ?>

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include_once('../config/aside.php'); ?>

            <div class="layout-page">

                <?php include_once('../config/nav.php'); ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="doughnutcommunicate_s"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="barsocial_s"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="department_s"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="doughnutcommunicate_p"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="barsocial_p"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="department_p"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include_once('../config/footer.php'); ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('data_s/communicate_data.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok.');
                    }
                    return response.json(); // แปลงข้อมูลเป็น JSON
                })
                .then(data => {
                    var labels = [];
                    var counts = [];
                    var backgroundColors = ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)', 'rgb(153, 102, 255)'];

                    data.forEach(function(item) {
                        var label;
                        switch (item.communicate) {
                            case "comm1":
                                label = 'ด้านผู้บริหาร';
                                break;
                            case "comm2":
                                label = 'ด้านบุคลากร';
                                break;
                            case "comm3":
                                label = 'ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)';
                                break;
                            case "comm4":
                                label = 'ประชุม / อบรม / สัมมนา';
                                break;
                            case "comm5":
                                label = 'ทํานุบํารุงศิลปวัฒนธรรม และ สิ่งแวดลอม';
                                break;
                            default:
                                label = 'Unknown';
                        }
                        labels.push(label);
                        counts.push(item.count);
                    });

                    var ctx = document.getElementById('doughnutcommunicate_s').getContext('2d');
                    var myDoughnutChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'จำนวน',
                                data: counts,
                                backgroundColor: backgroundColors.slice(0, labels.length),
                                hoverOffset: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'หมวดหมู่การสื่อสาร'
                                },
                                datalabels: {
                                    formatter: (value, context) => {
                                        // คำนวณเปอร์เซ็นต์
                                        let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                                        return percentage;
                                    },
                                    color: '#fff',
                                    anchor: 'end',
                                    align: 'start',
                                    offset: 4
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('data_p/communicate_data.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok.');
                    }
                    return response.json(); // แปลงข้อมูลเป็น JSON
                })
                .then(data => {
                    var labels = [];
                    var counts = [];
                    var backgroundColors = ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)', 'rgb(153, 102, 255)'];

                    data.forEach(function(item) {
                        var label;
                        switch (item.communicate) {
                            case "comm1":
                                label = 'ด้านผู้บริหาร';
                                break;
                            case "comm2":
                                label = 'ด้านบุคลากร';
                                break;
                            case "comm3":
                                label = 'ด้านผลิตภัณฑ์ (การศึกษา การวิจัย บริการวิชาการ)';
                                break;
                            case "comm4":
                                label = 'ประชุม / อบรม / สัมมนา';
                                break;
                            case "comm5":
                                label = 'ทํานุบํารุงศิลปวัฒนธรรม และ สิ่งแวดลอม';
                                break;
                            default:
                                label = 'Unknown';
                        }
                        labels.push(label);
                        counts.push(item.count);
                    });

                    var ctx = document.getElementById('doughnutcommunicate_p').getContext('2d');
                    var myDoughnutChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'จำนวน',
                                data: counts,
                                backgroundColor: backgroundColors.slice(0, labels.length),
                                hoverOffset: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'หมวดหมู่การสื่อสาร'
                                },
                                datalabels: {
                                    formatter: (value, context) => {
                                        // คำนวณเปอร์เซ็นต์
                                        let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                                        return percentage;
                                    },
                                    color: '#fff',
                                    anchor: 'end',
                                    align: 'start',
                                    offset: 4
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('data_s/social_data.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok.');
                    }
                    return response.json(); // แปลงข้อมูลเป็น JSON
                })
                .then(data => {
                    var labels = [];
                    var counts = [];
                    var backgroundColors = [
                        'rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)', 'rgb(153, 102, 255)', 'rgb(255, 159, 64)',
                        'rgb(199, 199, 199)', 'rgb(83, 102, 255)', 'rgb(255, 99, 71)'
                    ];

                    data.forEach(function(item) {
                        labels.push(item.social_type);
                        counts.push(item.count);
                    });

                    var ctx = document.getElementById('barsocial_s').getContext('2d');
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'จำนวน',
                                data: counts,
                                backgroundColor: backgroundColors.slice(0, labels.length),
                                hoverOffset: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'ช่องทางประชาสัมพันธ์'
                                },
                                datalabels: {
                                    formatter: (value, context) => {
                                        // คำนวณเปอร์เซ็นต์
                                        let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                                        return percentage;
                                    },
                                    color: '#fff',
                                    anchor: 'end',
                                    align: 'top',
                                    offset: 4
                                }
                            },
                            scales: {
                                x: {
                                    beginAtZero: true
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        callback: function(value) {
                                            return value; // แสดงค่าบนแกน Y เป็นจำนวนจริง
                                        }
                                    }
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('data_p/social_data.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok.');
                    }
                    return response.json(); // แปลงข้อมูลเป็น JSON
                })
                .then(data => {
                    var labels = [];
                    var counts = [];
                    var backgroundColors = [
                        'rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)', 'rgb(153, 102, 255)', 'rgb(255, 159, 64)',
                        'rgb(199, 199, 199)', 'rgb(83, 102, 255)', 'rgb(255, 99, 71)'
                    ];

                    data.forEach(function(item) {
                        labels.push(item.social_type);
                        counts.push(item.count);
                    });

                    var ctx = document.getElementById('barsocial_p').getContext('2d');
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'จำนวน',
                                data: counts,
                                backgroundColor: backgroundColors.slice(0, labels.length),
                                hoverOffset: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'ช่องทางประชาสัมพันธ์'
                                },
                                datalabels: {
                                    formatter: (value, context) => {
                                        // คำนวณเปอร์เซ็นต์
                                        let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                                        return percentage;
                                    },
                                    color: '#fff',
                                    anchor: 'end',
                                    align: 'top',
                                    offset: 4
                                }
                            },
                            scales: {
                                x: {
                                    beginAtZero: true
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        callback: function(value) {
                                            return value; // แสดงค่าบนแกน Y เป็นจำนวนจริง
                                        }
                                    }
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('data_s/department_data.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok.');
                    }
                    return response.json(); // แปลงข้อมูลเป็น JSON
                })
                .then(data => {
                    var labels = [];
                    var counts = [];
                    var backgroundColors = [
                        'rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)', 'rgb(153, 102, 255)', 'rgb(255, 159, 64)',
                        'rgb(199, 199, 199)', 'rgb(83, 102, 255)', 'rgb(255, 99, 71)'
                    ];

                    data.forEach(function(item) {
                        labels.push(item.department); // ใช้ department เป็น label
                        counts.push(item.count);
                    });

                    var ctx = document.getElementById('department_s').getContext('2d');
                    var mydepartment_data = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'จำนวน',
                                data: counts,
                                backgroundColor: backgroundColors.slice(0, labels.length),
                                hoverOffset: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'หมวดหมู่แผนก'
                                },
                                datalabels: {
                                    formatter: (value, context) => {
                                        // คำนวณเปอร์เซ็นต์
                                        let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                                        return percentage;
                                    },
                                    color: '#fff',
                                    anchor: 'end',
                                    align: 'start',
                                    offset: 4
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('data_p/department_data.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok.');
                    }
                    return response.json(); // แปลงข้อมูลเป็น JSON
                })
                .then(data => {
                    var labels = [];
                    var counts = [];
                    var backgroundColors = [
                        'rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)', 'rgb(153, 102, 255)', 'rgb(255, 159, 64)',
                        'rgb(199, 199, 199)', 'rgb(83, 102, 255)', 'rgb(255, 99, 71)'
                    ];

                    data.forEach(function(item) {
                        labels.push(item.department); // ใช้ department เป็น label
                        counts.push(item.count);
                    });

                    var ctx = document.getElementById('department_p').getContext('2d');
                    var mydepartment_data = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'จำนวน',
                                data: counts,
                                backgroundColor: backgroundColors.slice(0, labels.length),
                                hoverOffset: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'หมวดหมู่แผนก'
                                },
                                datalabels: {
                                    formatter: (value, context) => {
                                        // คำนวณเปอร์เซ็นต์
                                        let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                                        return percentage;
                                    },
                                    color: '#fff',
                                    anchor: 'end',
                                    align: 'start',
                                    offset: 4
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>