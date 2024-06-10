

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('title') | Quản trị Admin
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/admin/doc/css/main.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />
    {{-- @extends('layout.scripts.datetime') --}}
    <script type="text/javascript">
        //Thời Gian
        function time() {
            var today = new Date();
            var weekday = new Array(7);
            weekday[0] = "Chủ Nhật";
            weekday[1] = "Thứ Hai";
            weekday[2] = "Thứ Ba";
            weekday[3] = "Thứ Tư";
            weekday[4] = "Thứ Năm";
            weekday[5] = "Thứ Sáu";
            weekday[6] = "Thứ Bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            nowTime = h + " giờ " + m + " phút " + s + " giây";
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = day + ', ' + dd + '/' + mm + '/' + yyyy;
            tmp = '<span class="date"> ' + today + ' - ' + nowTime +
                '</span>';
            document.getElementById("clock").innerHTML = tmp;
            clocktime = setTimeout("time()", "1000", "Javascript");
    
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
        }
    </script>

</head>

<body onload="time()" class="app sidebar-mini rtl">
    

    @extends('layout.partials.topbar')
    @extends('layout.partials.sidebar')
    <main class="app-content">

    @yield('content')

    <div class="text-center" style="font-size: 13px">
        <p><b>Copyright
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script> Phần mềm quản lý bán hàng | Dev Đức Thiện
            </b></p>
    </div>
    </main>



    <script src="{{ asset('/') }}assets/admin/doc/js/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}assets/admin/doc/js/popper.min.js"></script>
    
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}assets/admin/doc/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}assets/admin/doc/js/main.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}assets/admin/doc/js/plugins/pace.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('/') }}assets/admin/doc/js/plugins/chart.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript">
    
        var data = {
          labels: [
            "Tháng 1",
            "Tháng 2",
            "Tháng 3",
            "Tháng 4",
            "Tháng 5",
            "Tháng 6",
          ],
          datasets: [
            {
              label: "Dữ liệu đầu tiên",
              fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
              strokeColor: "rgb(255, 212, 59)",
              pointColor: "rgb(255, 212, 59)",
              pointStrokeColor: "rgb(255, 212, 59)",
              pointHighlightFill: "rgb(255, 212, 59)",
              pointHighlightStroke: "rgb(255, 212, 59)",
              data: [20, 59, 90, 51, 56, 100],
            },
            {
              label: "Dữ liệu kế tiếp",
              fillColor: "rgba(9, 109, 239, 0.651)  ",
              pointColor: "rgb(9, 109, 239)",
              strokeColor: "rgb(9, 109, 239)",
              pointStrokeColor: "rgb(9, 109, 239)",
              pointHighlightFill: "rgb(9, 109, 239)",
              pointHighlightStroke: "rgb(9, 109, 239)",
              data: [48, 48, 49, 39, 86, 10],
            },
          ],
        };
        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);
  
        var ctxb = $("#barChartDemo").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data);
      </script>
      
      <style>
        .Choicefile {
            display: block;
            background: #14142B;
            border: 1px solid #fff;
            color: #fff;
            width: 150px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            padding: 5px 0px;
            border-radius: 5px;
            font-weight: 500;
            align-items: center;
            justify-content: center;
        }
    
        .Choicefile:hover {
            text-decoration: none;
            color: white;
        }
    
        #uploadfile,
        .removeimg {
            display: none;
        }
    
        #thumbbox {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }
    
        .removeimg {
            height: 25px;
            position: absolute;
            background-repeat: no-repeat;
            top: 5px;
            left: 5px;
            background-size: 25px;
            width: 25px;
            /* border: 3px solid red; */
            border-radius: 50%;
    
        }
    
        .removeimg::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            content: '';
            border: 1px solid red;
            background: red;
            text-align: center;
            display: block;
            margin-top: 11px;
            transform: rotate(45deg);
        }
    
        .removeimg::after {
            /* color: #FFF; */
            /* background-color: #DC403B; */
            content: '';
            background: red;
            border: 1px solid red;
            text-align: center;
            display: block;
            transform: rotate(-45deg);
            margin-top: -2px;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    
    <!-- Page specific javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $("#sampleTable").DataTable();
    </script>
    <script>
        function confirmDelete(event, element) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>
            swal({
                title: "Cảnh báo",
                text: "Bạn có chắc chắn muốn xóa không?",
                buttons: ["Hủy bỏ", "Đồng ý"],
            }).then((willDelete) => {
                if (willDelete) {
                    // Nếu người dùng đồng ý, chạy link href
                    window.location.href = element.href;
                    swal("Đã xóa thành công.!", {});
                }
            });
        }
    </script>
    <script>
      function previewImage(input) {
          var thumbImage;
          var thumbBox;
  
          if (input.name === "ImageUploadLogo") {
              thumbImage = document.getElementById('thumbimageLogo');
              thumbBox = document.getElementById('thumbboxLogo');
          } else {
              thumbImage = document.getElementById('thumbimage');
              thumbBox = document.getElementById('thumbbox');
          }
  
          // Xóa bỏ tất cả các phần tử con trong thumbBox trước khi thêm mới
          while (thumbBox.firstChild) {
              thumbBox.removeChild(thumbBox.firstChild);
          }
  
          if (input.files && input.files.length > 0) {
              for (var i = 0; i < input.files.length; i++) {
                  var reader = new FileReader();
  
                  reader.onload = function (e) {
                      // Tạo một thẻ img mới cho mỗi ảnh được chọn
                      var img = document.createElement('img');
                      img.src = e.target.result;
                      img.height = 300; // Thiết lập kích thước cho ảnh
                      img.width = 300;
  
                      // Thêm ảnh vào thumbBox
                      thumbBox.appendChild(img);
                  };
  
                  reader.readAsDataURL(input.files[i]);
              }
          }
      }
  </script>



  
  
  
  </body>

</html>