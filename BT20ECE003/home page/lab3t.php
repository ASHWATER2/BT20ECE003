<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

$cookie_name="username";
$cookie_value=$_SESSION['username'];
setcookie($cookie_name,$cookie_value,time()+3600,"/");
?>


<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>PHEONIX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
    function cooki(){
       alert('Cookies are enabled\nUsername is:<?php echo $cookie_value;?>');
    }
    </script>
    </head>

<body id="top">
    <div class="container">
        <ul>
      <li class="welcome">Welcome <?php echo $_SESSION['username'];?>!!!</li>
      <li class="claock"><div id="clock">00:00:00</div></li>
      <li> <button type="button" class="cookie"  onclick="cooki()">Cookies</button></li>
      <li class="out"><a href="logout.php">LOGOUT</a></li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="left">
            <img src="pheonix.jpg" alt="Indian Institute of Information Technology, Nagpur" width="305px" height="98px" class="img-responsive"></a>
        </div>
        <div class="text">
            <h2><strong>फीनिक्स Pheonix</strong></h2>
            <p style="font-size: x-large;">An Institution Promising Better Education!!!</p>
        </div>
        <div class="right"><img src="pheonix.jpg" alt="Second Logo" width="305px" height="98px"></div>
    </div>
    <table class="menu">
        <tr>
            <td><img src="Nalanda.jpg" alt="Nalanda" width="125px" height="82px"></td>
            <td>
                <div class="menu-bar">
                    <ul>
                        <li class="active" id="Home"><a href="#">Home</a> <i class="fa fa-home"></i></li>
                        <li><a href="#">Culture</a> <i class="fa fa-user-circle-o"></i>
                            <div class="sub-menu-0">
                                <ul>
                                    <li>
                                        <a href="#">Music</a>
                                    </li>
                                    <li>
                                        <a href="#">Dance</a>
                                    </li>
                                    <li>
                                        <a href="#">Archaelogy</a>
                                    </li>
                                    <li>
                                        <a href="#">Vedic Culture</a>
                                    </li>
                                    <li>
                                        <a href="#">Ancient Monuments</a>
                                    </li>
                                    <li>
                                        <a href="#">Religion</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Literature</a> <i class="fa fa-book"></i>
                            <div class="sub-menu-1">
                                <ul>
                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">Hindi</a>
                                    </li>
                                    <li>
                                        <a href="#">Social Science</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Engineering</a> <i class="fa fa-cogs"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li>
                                        <a href="#">Computer Science & Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Electronics & Communication Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Mechanical Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Chemical Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Metallurgical & Material Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Textile Engineering</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Science</a> <i class="fa fa-flask"></i>
                            <div class="sub-menu-3">
                                <ul>
                                    <li>
                                        <a href="#">Mathematics</a>
                                    </li>
                                    <li>
                                        <a href="#">Physics</a>
                                    </li>
                                    <li>
                                        <a href="#">Chemistry</a>
                                    </li>
                                    <li>
                                        <a href="#">Biology</a>
                                    </li>
                                    <li>
                                        <a href="#">Astronomy</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Medical</a> <i class="fa fa-plus-square"></i>
                            <div class="sub-menu-4">
                                <ul>
                                    <li>
                                        <a href="#">Medicine & Surgery</a>
                                    </li>
                                    <li>
                                        <a href="#">Dental Science</a>
                                    </li>
                                    <li>
                                        <a href="#">Homopathic Medicine & Surgery</a>
                                    </li>
                                    <li>
                                        <a href="#">Ayurvedic Medicine & Sugery</a>
                                    </li>
                                    <li>
                                        <a href="#">Pharmacy</a>
                                    </li>
                                    <li>
                                        <a href="#">Physiotherapy</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Contact us</a> <i class="fa fa-address-book"></i></li>
                    </ul>
                </div>
            </td>
            <td class="xyz">
                <td><img src="Nalanda.jpg" alt="Nalanda" width="125px" height="82px"></td>
            </td>
        </tr>
    </table>
    <div class="textmover">
        <marquee direction="left">
            <h1 style="font-size: 30px;">काकचेष्टा बकोध्यानं श्वाननिद्रा तथैव च | अल्पाहारी ब्रह्मचारी विद्यार्थी पञ्चलक्षणम् || </h1>
        </marquee>
    </div>

    <div class="slider">
        <figure>
            <div class="slide">
                <img src="o0.jpg" alt="o0" width="300px" height="500px">
            </div>
            <div class="slide">
                <img src="o1.jpg" alt="o1" width="300px" height="500px">
            </div>
            <div class="slide">
                <img src="o2.jpg" alt="02" width="300px" height="500px">
            </div>
            <div class="slide">
                <img src="o3.jpg" alt="03" width="300px" height="500px">
            </div>
            <div class="slide">
                <img src="o4.jpg" alt="04" width="300px" height="500px">
            </div>
        </figure>
    </div>

    <div class="main-div-0">
        <div class="maindiv2">
            <h2 style="text-align: center;">Quick Links
            </h2>
            <hr />
            <div class="ash">
                <ul>
                    <li><a href="https://aicte-india.org/ap2022/">Approval Process 2021-22</a></li>
                    <br />
                    <li>
                        <a href="https://internship.aicte-india.org/">AICTE Internship Portal</a>
                    </li>
                    <br />
                    <li>
                        <a href="https://www.aicte-india.org/atal">ATAL Academy</a>
                    </li>
                    <br />
                    <li>
                        <a href="https://aicte-india.org/odl/">ODL and Online Regulatory Framework</a>
                    </li>
                    <br />
                    <li>
                        <a href="https://aicte-india.org/bureaus/jk">PMSSS J&K</a>
                    </li>
                    <br />
                    <li>
                        <a href="https://aicte-india.org/policy-reforms">Policies & Reforms</a>
                    </li>
                    <br />
                    <li>
                        <a href="https://fdp-si.aicte-india.org/">FDP-SI Web portal</a>
                    </li>
                    <br />
                    <li>
                        <a href="https://www.aicte-india.org/bureaus/margdarshak">Margdarshan Initiative</a>
                    </li>
                    <br />
                    <li>
                        <a href="#"><img src="Homepage_Bureas_Approvals.jpg" alt="home" width="100%"></a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="wrapper">
            <header>
                <h1 style="color: rgb(255, 8, 0);">Welcome to Pheonix!!
                </h1>
            </header>
            <section class="courses">
                <article>
                    <figure>
                        <img src="OIP.jpg" alt="m1" />
                        <figcaption>Never Stop. Try, Try,Try and Succeed in life!
                        </figcaption>
                    </figure>
                    <div class="aab">
                        <h2>Education</h2>
                        <p><strong>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, morals, belifs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.</strong></p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="260px-Woman_teaching_geometry.jpg" alt="Woman Teaching Geometry" />
                        <figcaption>Woman Teaching Geometry!!!</figcaption>
                    </figure>
                    <div class="aab">
                        <h2>Pedagogy</h2>
                        <h3>Our method of teaching</h3>
                        <p><strong>Learning, Practicing, and Applying </strong>are the three pillar in the process of Education, which we are frequently using to teach and train students to survive in this cutting edge technology era.</p>
                    </div>
                </article>
            </section>
            <aside>
                <section>
                    <h2>Popular Courses</h2>
                    <a href="https://www.w3schools.com/html">HTML</a>
                    <a href="https://www.w3schools.com/css/default.asp">CSS,JAVASCRIPT</a>
                    <a href="https://www.udemy.com/course/deep-reinforcement-learning-in-python/?matchtype=e&msclkid=449e280a6b6310e0f55a48db41200217&utm_campaign=BG-LongTail_la.EN_cc.INDIA&utm_content=deal4584&utm_medium=udemyads&utm_source=bing&utm_term=_._ag_1218259296887914_._ad__._kw_Artificial+Intelligence+Course_._de_c_._dm__._pl__._ti_kwd-76141544080588%3Aloc-90_._li_1651_._pd__._">Artificial Intelligence(AI)</a>
                    <a href="https://www.netacad.com/courses/iot">Internet of Things(IoT)</a>
                    <a href="https://www.codecademy.com/learn/introduction-to-blockchain?g_acctid=243-039-7011&g_keywordid=kwd-79165242009126:loc-90&g_adid=&g_keyword=%2Bblockchain%20%2Bcourse&g_campaign=ROW+Language%3A+Pro+-+Broad&g_adtype=search&g_network=o&g_adgroupid=1266638031235142&g_campaignid=370379642&b_device=c&utm_id=t_kwd-79165242009126:loc-90:ag_1266638031235142:cp_370379642:n_o:d_c&hsa_acc=2430397011&hsa_cam=10947274263&hsa_grp=1266638031235142&hsa_ad=&hsa_src=o&hsa_tgt=kwd-79165242009126:loc-90&hsa_kw=%2Bblockchain%20%2Bcourse&hsa_mt=e&hsa_net=adwords&hsa_ver=3&msclkid=646443a547081442c06023746dd3c14a&utm_source=bing&utm_medium=cpc&utm_campaign=ROW%20Language%3A%20Pro%20-%20Broad&utm_term=%2Bblockchain%20%2Bcourse&utm_content=blockchain%20with%20python">Blockchain</a>
                    <a href="https://www.coursera.org/specializations/robotics">Robots</a>
                    <a href="https://www.udemy.com/learnanything/">Communication Technology</a>
                </section>
                <section>
                    <h2>Contact</h2>
                    <p>Amilaur, Gopiganj,<br /> Sant Ravidas Nagar,<br /> Uttar Pradesh-221303
                        <br /> India.</p>
                </section>
            </aside>
            <footer>
                विद्या विनय देती है; विनय से पात्रता, पात्रता से धन, धन से धर्म, और धर्म से सुख प्राप्त होता है ।
            </footer>

        </div>
        <div class="maindiv3">
            <h2 style="text-align: center;">Announcements</h2>
            <hr />
            <div class="ash1">
                <ul>
                    <li><a href="#"> Academic Calendar 2021-22</a></li>
                    <li><a href="#"> Circular to All PGDM / MBA Institutions</a></li>
                    <li><a href="#">Instructions to Institutes/Colleges during Lockdown/On-going pandemic COVID-19</a></li>
                    <li><a href="#">Public Notice Regarding Approval Process 2021-22 - 13th April 2021 (Updated)</a></li>
                    <li><a href="#">Last date for Submission of online application for Approval Process, A.Y. 2021-22 has extended upto 24th April, 2021 to all categories without any Late fee</a></li>
                    <li><a href="#">Shortlisted teams for National Convention under Chhatra Vishwakarma awards 2020</a></li>
                    <li>
                        <a href="#"><img src="download.jpg" alt="home" width="100%"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="quate">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 7</div>
                <img src="t1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 7</div>
                <img src="t2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 7</div>
                <img src="t3.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 7</div>
                <img src="t4.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 7</div>
                <img src="t5.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">6 / 7</div>
                <img src="t6.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">7 / 7</div>
                <img src="t8.jpg" style="width:100%">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 4000);
            }
        </script>
    </div>
    <div class="quates">
        <img src="p0.jpg" alt="p0" height="200px">
        <img src="p1.jpg" alt="p1" height="200px">
        <img src="p2.jpg" alt="p2" height="200px">
        <img src="p3.jpg" alt="p3" height="200px">
        <img src="p4.jpg" alt="p4" height="200px">
    </div>
    <div class="book1">
    <div class="container2">
        <div class="input">
            Name: <input id="name" type="text" name="name" placeholder="Name" />
        </div>
        <div class="input">
            Age: <input id="age" type="text" name="age" placeholder="Age" />
        </div>
        <div class="input">
            Grade: <input id="grade" name="grade" type="text" placeholder="Grade" />
        </div>

        <button id="entry">Input entry</button>
    </div>

    <table id="display" border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
    </table>
    <script>
        var row = 1;
        var entry = document.getElementById("entry");
        entry.addEventListener("click", displayDetails);

        var rIndex, table = document.getElementById("display");

        function displayDetails() {
            var name = document.getElementById("name").value;
            var age = document.getElementById("age").value;
            var grade = document.getElementById("grade").value;
            if (!name || !age || !grade) {
                alert("Please fill all the boxes");
                return;
            }

            var display = document.getElementById("display");

            var newRow = display.insertRow(row);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);

            cell1.innerHTML = name;
            cell2.innerHTML = age;
            cell3.innerHTML = grade;

            row++;
        }
    </script>
    </div>
    <div class="book2"></div>

    <div class="footer-last">
        <footer style="color: brown;">
            &copy Created by, Ayush Shukla, BT20ECE003.
            <p style="float: left">
                <a href="#top"><i class="fa fa-arrow-up"></i></a>Top
            </p>
        </footer>
    </div>

  
    <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
  
            let currentTime = hour + ":" 
                + min + ":" + sec + am_pm;
  
            document.getElementById("clock")
                .innerHTML = currentTime;
        }
  
        showTime();
    </script>
</body>

</html>