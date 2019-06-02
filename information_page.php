<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="icon" href="data:image/png;base64,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">

    <style>
        .customBtn {

            margin: 0px 10px 10px 0px;
            height: 80px;
            width: 550px;
            color: white;
            background-color: darkgray;

        }

        .customBack {

            height: 100px;
            width: 100%;
            background-image: url("");

        }

        .topLeftImage {

            background: url("handIcon.jpg");
            background-size: 120px;
            height: 120px;
            width: 120px;
            margin-right: 50px;

        }

        .loginBut {
            text-decoration: none;
            color: #E52C34;
            display: inline;

        }

        .logoutBut {
            text-decoration: none;
            color: #E52C34;
            display: none;
        }
    </style>

    <title>Patates</title>
</head>

<body>
<div class="container-fluid" style="height:20%">
        <div class="row">
            <nav style="background-color:white" class="navbar navbar-expand-lg navbar-light bg-white col-md-11 offset-md-1">
                <a href="homepage.php" id="homepage" onclick="document.location=this.id+'.php';return false;">
                    <img src="handIcon.jpg" class="topLeftImage" alt="Blood Donation" title="Patates">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="hospitalTableClient.php" style="font-size: 25px; margin-right: 30px">Hospital <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="information_page.php" style="font-size: 25px; margin-right: 30px">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="staff.php" style="font-size: 25px;">Our Staff</a>
                        </li>
                    </ul>

                    <a id="login" class="col-md-3 offset-md-3 loginBut" href="login_pg.php">
                        Log In
                    </a>
                    <a id="logout" class="col-md-3 offset-md-3 logoutBut" href="logout.php">
                        Log Out
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-6 offset-md-3" style="67%">
            <h1 class="page-title ms-dialogHidden">
                <span>
                    Blood Donation Process
                </span>
            </h1>
            <div class="page-content" style="margin-bottom: 50px">
                <div id="label" style="display:none">Page Content</div>
                <div id="RichHtmlField" class="ms-rtestate-field" style="display:inline" aria-labelledby="label">
                    <p>Donating blood is a safe, simple, and rewarding experience that usually only takes 45-60
                        minutes. </p>
                    <h3>Before You Donate</h3>
                    <p>To donate blood, find a blood bank near you using AABB’s blood bank locator. Then, call the
                        blood bank to make an appointment. When making the appointment, ask the following questions:
                    </p>
                    <ul>
                        <li>What are your general donor requirements? (Most places require you to weigh a minimum of
                            110 pounds, be at least 16 years old and be generally healthy).</li>
                        <li>What kind of identification is required? (First-time donors are usually asked to present
                            two forms of identification—the type of identification needed varies by facility).</li>
                        <li>If you have any particular health concerns or have traveled outside of the country, it’s
                            also a good idea to inform the blood bank at the time you are making your appointment.
                        </li>
                    </ul>
                    <h3>When You Arrive at the Blood Donation Center </h3>
                    <ul>
                        <li>When you sign in, you will be asked to complete a donor registration form, which
                            includes your name, address, phone number, and various other types of demographic
                            information.</li>
                        <li>You will also be asked to show your donor card or the type of identification required by
                            the particular blood bank you visit.</li>
                    </ul>
                    <h3>Pre-Donation Screening</h3>
                    <ul>
                        <li>During pre-donation screening, a blood bank employee will ask you some questions about
                            your health, lifestyle, and disease risk factors. All of this information is
                            confidential.
                        </li>
                        <li>Next, an employee will perform a short health exam, taking your pulse, temperature and
                            blood pressure.
                        </li>
                        <li>A drop of blood from your finger will also be tested to ensure that your blood iron
                            level is sufficient for you to donate. All medical equipment used for this test, as well
                            as during the donation process, is sterile, used only once and then disposed.</li>
                    </ul>
                    <h3>Blood Donation</h3>
                    <ul>
                        <li>Once the pre-donation screening is finished, you will proceed to a donor bed where your
                            arm will be cleaned with an antiseptic, and a professional will use a blood donation kit
                            to draw blood from a vein in your arm. If you are allergic to iodine, be sure to tell
                            the phlebotomist at this point.</li>
                        <li>During the donation process, you will donate one unit of blood; this takes about six to
                            ten minutes.</li>
                    </ul>
                    <h3>Post-Donation</h3>
                    <ul>
                        <li>Following your donation, you will receive refreshments in the canteen area, where you
                            can stay until you feel strong enough to leave.</li>
                        <li>After donating, it is recommended that you increase your fluid intake for the next 24 to
                            48 hours; avoid strenuous physical exertion, heavy lifting or pulling with the donation
                            arm for about five hours; and eat well balanced meals for the next 24 hours. After
                            donating, smoking and alcohol consumption is not recommended</li>
                        <li>Although donors seldom experience discomfort after donating, if you feel light-headed,
                            lie down until the feeling passes. If some bleeding occurs after removal of the bandage,
                            apply pressure to the site and raise your arm for three to five minutes. If bruising or
                            bleeding appears under the skin, apply a cold pack periodically to the bruised area
                            during the first 24 hours, then warm, moist heat intermittently.</li>
                        <li>If you have any questions concerning your donation or experience any unexpected
                            problems, please call the center where you donated blood.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="background-color:#E52C34; height:13%">


        </div>
    </div>
</body>

</html>