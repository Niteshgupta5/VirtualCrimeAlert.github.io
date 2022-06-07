<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo Time(); ?>">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style type="text/css">
  	#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: black; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
.bg-dark {
    background-color: #1d2124!important;
}

#accordion .panel{
    border: none;
    border-radius: 0;
    box-shadow: none;
    margin-bottom: -5px;
}
#accordion .panel-heading{
    padding: 0;
    border: none;
    border-radius: 0;
}
#accordion .panel-title a{
    display: block;
    padding: 15px 70px 15px 20px;
    background: #f1f1f1ed;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #e6720d;
    border-bottom: 1px solid #1d2e3b;
    position: relative;
}
#accordion .panel-title a.collapsed{ color: #1d2e3b; }
#accordion .panel-title a.collapsed:hover{ color: #e6720d; }
#accordion .panel-title a:before,
#accordion .panel-title a:after{
    content: "";
    width: 3px;
    height: 10px;
    background: #e6720d;
    font-size: 15px;
    position: absolute;
    top: 20px;
    right: 35px;
    transform: rotate(-45deg);
    transition: all 0.3s ease-in-out 0s;
}
#accordion .panel-title a:after{
    right: 29px;
    transform: rotate(45deg);
}
#accordion .panel-title a.collapsed:before{
    transform: rotate(45deg);
    background: #1d2e3b;
}
#accordion .panel-title a.collapsed:after{
    transform: rotate(-45deg);
    background: #1d2e3b;
}
#accordion .panel-title a.collapsed:hover:before,
#accordion .panel-title a.collapsed:hover:after{ background: #e6720d; }
#accordion .panel-body{
    padding: 10px 20px;
    background: #1d2e3b;
    border:2px solid black;
    border-radius: 5px;
    font-size: 15px;
    color: #fff;
    line-height: 25px;
}
small {
     font-size: calc(12px + (15 - 12) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .bold-text {
     color: #ffc107 !important;
 }

 .mt-55 {
     margin-top: calc(50px + (60 - 50) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .social {
     font-size: 21px !important
 }

 .rights{
     font-size: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
 }
 
 .panel-title {
 border:2px solid #b8babc;
 }
 /* Dropdown Button */
.dropbtn {
  background-color: #e8f0e800;
  color: #03ffb4;
  padding: 10px;
  font-size: 25px;
  border: none;
  font-family: poppins;
  font-weight: bold;
  text-transform: unset;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f194;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 20px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color:#e8f0e800;}

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">Virtual Crime Alert</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
  <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="services.php">Services</a>
    </li>
    <li class="nav-item">
    <li class="nav-item">
      
      <a class="nav-link" href="helpline.php">Helpline</a>
    </li>
    <li class="nav-item ">
      <div class="dropdown">
  <button class="dropbtn">Welcome <?php echo $_SESSION['username'];?></button>
  <div class="dropdown-content">
    <a href="logout.php">Logout</a>
  </div>
</div>
    </li>
  </ul>
</div>
</div>
</nav>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up' style='font-size:24px'></i></button>
<div class="container-fluid"><img src="images/gif7.gif" width="80px" height="80px"><strong>Know more about Cyber Crime</strong></div><br>
<div class="container-fluid">
    <div class="row">
     
        <div class="col-md-6">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hacking
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/hack.jpg" width="100%" height="30%"></div><br>
                            <p>In simple words, hacking is an act committed by an intruder by accessing your computer system without your permission. Hackers (the people doing the ‘hacking’) are basically computer programmers, who have an advanced understanding of computers and commonly misuse this knowledge for devious reasons. They’re usually technology buffs who have expert-level skills in one particular software program or language. As for motives, there could be several, but the most common are pretty simple and can be explained by a human tendancy such as greed, fame, power, etc. Some people do it purely to show-off their expertise – ranging from relatively harmless activities such as modifying software (and even hardware) to carry out tasks that are outside the creator’s intent, others just want to cause destruction.<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greed and sometimes voyeuristic tendancies may cause a hacker to break into systems to steal personal banking information, a corporation’s financial data, etc. They also try and modify systems so hat they can execute tasks at their whims. Hackers displaying such destructive conduct are also called “Crackers” at times. they are also called “Black Hat” hackers On the other hand, there are those who develop an interest in computer hacking just out of intellectual curiosity. Some companies hire these computer enthusiasts to find flaws in their security systems and help fix them. Referred to as “White Hat” hackers, these guys are against the abuse of computer systems. They attempt to break into network systems purely to alert the owners of flaws. It’s not always altruistic, though, because many do this for fame as well, in order to land jobs with top companies, or just to be termed as security experts. “Grey Hat” is another term used to refer to hacking activities that are a cross between black and white hacking.<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some of the most famous computer geniuses were once hackers who went on to use their skills for constructive technological development. Dennis Ritchie and Ken Thompson, the creators of the UNIX operating system (Linux’s predecessor), were two of them. Shawn Fanning, the developer of Napster, Mark Zuckerberg of Facebook fame, and many more are also examples. The first step towards preventing hackers from gaining access to your systems is to learn how hacking is done. Of course it is beyond the scope of this Fast Track to go into great details, but we will cover the various techniques used by hackers to get to you via the internet.
</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Cyber Bulling
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/buly.jpg" width="100%" height="30%"></div><br>
                            <p>Cyberbullying is bullying that takes place over digital devices like cell phones, computers, and tablets. Cyberbullying can occur through SMS, Text, and apps, or online in social media, forums, or gaming where people can view, participate in, or share content. Cyberbullying includes sending, posting, or sharing negative, harmful, false, or mean content about someone else. It can include sharing personal or private information about someone else causing embarrassment or humiliation. Some cyberbullying crosses the line into unlawful or criminal behavior.
                              <ul><strong>The most common places where cyberbullying occurs are:</strong><li>Social Media, such as Facebook, Instagram, Snapchat, and Tik Tok.</li>
                                <li>Text messaging and messaging apps on mobile or tablet devices.</li>
                                <li>Instant messaging, direct messaging, and online chatting over the internet.</li>
                                <li>Online forums, chat rooms, and message boards, such as Reddit.</li>
                                <li>Email and Online gaming communities.</li>
                              </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Desktop Security
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/desktop.jpg" width="100%" height="30%"></div><br>
                            <p>An unfortunate number of women are becoming victims of cyber crimes. The growing reach of the Internet and the rapid spread of information through mobile devices have presented new opportunities that could put some women at risk, so it is important to be mindful of the dangers.A personal computer used without proper security measure could lead to exploiting the system for illegal activities using the resources of such in secured computers. These exploiters could be Virus, Trojans, Key loggers and sometimes real hackers. This may result in data theft, data loss, personal information disclosure, stealing of credentials like passwords etc. So, protect and secure your Personal Computer before it is compromised.<br><br><strong>Browser Security</strong> <ul><li> Always update your Web Browser with latest patches.</li>
                              <li>Use privacy or security settings which are inbuilt in the browser.</li>
                              <li> Also use content filtering software.</li> 
                           <li>Always have Safe Search “ON” in Search Engine. </li></ul>
                           <strong>E-mail Security</strong> <ul><li> Always use strong password for your email account.</li>
                            <li>Always scan the email attachments with latest updated Anti-Virus and Anti-Spy ware before opening.</li>
                              <li>Always remember to empty the Spam folder</li> 
                           </ul><strong>Wireless Security</strong><ul>
                             <li>Change default Administrator passwords.</li>
                              <li>Turn On WPA (Wi-Fi Protected Access) / WEP Encryption.</li>
                              <li>Change default SSID.</li>
                              <li>Enable MAC address filtering.</li>
                            <li>Turn off your wireless network when not in use.</li>
                           </ul>
                           <ul>
                             <strong>Modem Security</strong>
                             <li>  Change the default passwords.</li>
                             <li>Switch off when not in use.</li>
                           </ul>
                         <ul>
                             <strong>Internet Security</strong>
                             <li> Check the copyright issues before using the content of Inter¬net. Follow Internet Ethics while brows¬ing.</li>
                             <li> Always access the site which uses https (Hyper Text Trans¬fer Protocol Secure) while performing online transactions, downloads etc, which is secure.</li>
                             <li> If the site uses SSL, verify the certificate details like who is the owner, expiry date of the certificate etc to confirm whether it is trusted or not. You can do this by click¬ing the lock icon.</li>
                             <li> Use only original websites for down¬loading the files rath¬er than third party websites.</li>
                             <li> Scan the download¬ed files with an up¬dated Anti-Virus Soft¬ware before using it.</li>
                             <li> Install and properly configure a software firewall, to protect against malicious traffic.</li>
                           </ul>
                           <ul>
                             <strong>Data Security</strong>
                             <li> Enable auto-updates of your operating system and update it regularly.</li>
                             <li> Download Anti-Vi¬rus Software from a trusted website and install. Make sure it automatically gets updated with latest virus signatures.</li>
                             <li> Download Anti-Spy¬ware Software from a trusted website and install. Make sure it automatically up¬dates with latest defi-nitions.Use “Encryption” to secure your valuable information.</li>
                             <li> Strong password should be used for “Admin” Account on computer and for other important ap¬plications like email client, financial appli¬cations (accounting etc).</li>
                             <li> Backup: Periodically backup your comput¬er data on CD / DVD or USB drive etc... In case it may get cor¬rupted due to Hard Disk failures or when reinstalling/format ting the system.</li>
                             <li> Recovery Disk: Al¬ways keep recov¬ery disk supplied by Manufacturer / Ven¬dor of the Computer System to recover the Operating Sys¬tem in the event of boot failures due to system changes such as uncertified Driv¬ers/unknown Soft¬ware publisher.Startup programs should be monitored / controlled for opti¬mal system perfor¬mance.</li>
                           </ul>
                           <h3>Don’t leave your webcam connected:</h3><p>There are too many apps capable of turning on your camera and slyly recording your movements with¬out your knowledge. As a precaution disable camera permission and keep the lens of your camera closed or covered when not in use. Properly shutdown and switch off your personal computer after the use along with your external devices like Monitor, Mo¬dem, Speakers etc</p>
                           <h3>Backup your data:</h3>
                           <p>Backing up your data saves you when your computer crashes due to electrical outage or surge, like a lightning storm. It also helps if you fall prey to the newer type of ransomware, which encrypts your sensitive data. You can do your back-up manually by transferring important documents to an external hard drive. </p>
                         </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Social media related fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/social.jpg" width="100%" height="30%"></div><br>
                            <p>The social media user base has increased manifold in past few years as almost all strata of the society using websites such as Facebook, Twitter, YouTube, TikTok and Instagram for business, entertainment, gossip or to pursue their interests and keep abreast of the developments. Several modus operandi are used to defraud the users. Some of them include-
                             <ul><li>Creating fake account on social media</li>
                              <li>Impersonate someone, upload unauthorized photograph or video of a person</li>
                              <li>Hack another person’s profile</li>
                              <li>Use of profanity on personal chat or on community pages/ fora</li>
                              <li>Nasty language or pornography</li>
                              <li>Cyber bullying</li><li>Fake news or spreading rumours</li><li>Hurt someone’s feelings in regard to religion, race, language or region</li></ul></p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Online Debit/Credit card related fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/payment.jpg" width="100%" height="30%"></div><br>
                            <p>One of the methodologies constantly on rise, in these frauds a potential victim is approached by phone or SMS and is cautioned/ threatened by a person impersonating a bank official about closure of bank account or increased bank fees if they don’t ‘verify’ their account with relevant details. Sometimes the victims are also lured with promise of good discount or benefit of special offers to get the information such as card number, card verification value (CVV), expiry date and one-time password sent by the bank for verification.<br><br>
                              Once the accused get relevant details, they are used to transfer money into another account or for shopping online.<br><br>
                            In many cases, the victims don’t get any phone call and still their debit or credit card is misused online. In such a scenario, it is possible that the accused might have gathered the details through online database or use of skimmer machines. These machines look like swipe machines but can read and copy magnetic tape used in a card. With this detail, the accused can also make a clone card. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Job fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/job.jpg" width="100%" height="30%"></div><br>
                            <p>Thousands of job aspirants upload their details including qualification, communication address and phone number online on various portals and websites. After getting hold of information, the accused make a tailor-made pitch by telephone or email that congratulates the person on matching their criteria and taking the process further.<br><br>
                            On pretext of processing fee, caution money or other charges, the victim is encouraged to transfer money to a specific bank account which gets closed after the fraud is over. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSeven">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Metrimonial fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/matri.webp" width="100%" height="30%"></div><br>
                            <p>Multiple portals and websites have thousands of profiles of youth searching for life partners. A fraudster registers on these websites.<br><br>
                            The fraudsters then start contacting persons, projecting themselves as perfect match. Once someone responds, they further the conversation online and then seek help financially. Sometimes they even get married and then decamp with valuables. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingEight">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Loan fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/loan.jpg" width="100%" height="30%"></div><br>
                            <p>Accessing online database, the fraudsters identify potential victims and send emails/ SMS or make calls to them to offer loans at a very competitive interest rate and without registration, tax or GST. The victims get duped when the fraudsters ask for processing fees for the transactions. Once the money is transferred, the phone number and bank account get discontinued.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingNine">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Insurance fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/insurance.jpg" width="100%" height="30%"></div><br>
                            <p>In this method, the accused retrieve information on customers of various insurance firms and contact them on pretext of getting them refund for insurance or threatening them with discontinuation of the accounts for not accessing it regularly.<br><br>
                            Sometimes, the fraudsters even use name of regulatory authorities to scare the insurance policy holder and coax them to pay the amount immediately. Money is also demanded on pretexts such as insurance premium, security deposit, penalty, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTen">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Online shopping fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/shop.jpg" width="100%" height="30%"></div><br>
                            <p>Fraudsters put advertisements for electronic goods, vehicles, clothing, etc. on social media or portals for sale. Once someone contacts them for the same, they are asked to make advance payment for the goods. Once the fraudsters receive money, they don’t deliver the goods at all or deliver wrong/ sub-standard goods. Some websites store credit/ debit card information keyed-in by the customers and misuse it online.<br><br>
                            In a variant identified as OLX fraud, the fraudster keeps goods at a very cheap price on the web portal. Once people start spending money on the same, it gets removed from the listing and the fraudsters pocket the money. The goods are not sent, or the ones delivered are found to be defective. The fraudsters also approach officials of payment gateway to get the amount deposited on such sites fraudulently </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-6">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne1">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                Email-hacking
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne1">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/email.jpg" width="100%" height="30%"></div><br>
                            <p>In this crime, a hacker illegally gains access to a laptop/ desktop/ tablet computer. For the purpose, the hacker sends an email or a link in social media/ online platform. Once the unsuspecting victim opens it, with help of specialized software the hackers can steal details such as password of banks, transaction details and email conversations. The method is also used sometimes to harass a person by sending unwanted, disturbing images.</p></div></div>
                          <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                SIM swapping fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/sim.png" width="100%" height="30%"></div><br>
                            <p>With improved security for online accounts, mobile phone has become a key factor to break into these accounts. If a person experiences fraudulent practice, he/she approaches police but what if the one-time password (OTP) was basis of the transaction? Fraudsters swap SIM or copy information which can be transferred across devices.<br><br>
                              With advent of net banking and other online services, possessing mobile numbers is a must with companies sending verification and OTP to customers. The OTP is verified by the fraudster without knowledge of the original owner for financial gains.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                Email spoofing
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree1">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/sppof.jpg" width="100%" height="30%"></div><br>
                            <p>Here the accused make exact replica of an email id or use similar-sounding words to spoof the email. Emails are used to share important information quickly and here the fraudsters try to gain by changing delivery method for the goods. They can also change bank account details where the money is to be deposited. As part of the fraud, the accused also try to divert funds or seek money on different pretexts.
                         </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                E-commerce related fraud
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour1">
                        <div class="panel-body">
                          <div class="container" style="padding: 10px;height: "><img src="images/ecomm.jpg" width="100%" height="30%"></div><br>
                            <p>Be cautious while using websites like OLX to buy or sell items. Cheaters create false account here on websites as seller and upload pictures of costly goods and items to be sold at cheaper rates. During conversations, they win confidence of the buyer and ask for advance payment, once payment is done by the buyer, goods / items are never delivered.<br><br>
                            On another side, criminals are also looking out for sellers on such websites. They develop relations with sellers during the deal for buying expensive items from them, ask them to take payment in advance. Send them request from e-wallets like Google pay and misguide them to click on “pay” option instead of “accept payment”. Once the seller clicks on “pay” icon, money are transferred from his / her bank account which never come back.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
                                Ransomware
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive1">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/ransomware.jpg" width="100%" height="30%"></div><br>
                            <p>Ransom is now collected by the criminal’s expert in online programming and hacking by locking down a remote server or individual system. If the system is not protected properly by firewall, these criminals can get access to an individual computer or network of computers and encrypt all data. The method renders computer useless for the person. Hackers do it to demand ransom – payment either through anonymous sources online or Bitcoin to ‘release’ the computer system.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSix1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix1" aria-expanded="false" aria-controls="collapseSix1">
                                Identity theft
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix1">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/identity1.jpg" width="100%" height="30%"></div><br>
                            <p>Identity theft occurs when someone steals your identity and pretends to be you to access resources such as credit cards, bank accounts and other benefits in your name. The imposter may also use your identity to commit other crimes. “Credit card fraud” is a wide ranging term for crimes involving identity theft where the criminal uses your credit card to fund his transactions. Credit card fraud is identity theft in its simplest form. The most common case of credit card fraud is your pre-approved card falling into someone else’s hands.<br><br>He can use it to buy anything until you report to the authorities and get your card blocked. The only security measure on credit card purchases is the signature on the receipt but that can very easily be forged. However, in some countries the merchant may even ask you for an ID or a PIN. Some credit card companies have software to estimate the probability of fraud. If an unusually large transaction is made, the issuer may even call you to verify. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSeven1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven1" aria-expanded="false" aria-controls="collapseSeven1">
                              Malware Attack
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven1">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/malware.jpg" width="100%" height="30%"></div><br>
                            <p>Malware can be viruses, trojans, worms or ransomware. The viruses affect system functioning and makes the system slow whereas trojans gather data in the background without getting detected in general scan. The criminals can also steal credentials for identity theft or install a key-logger to identify common keyboard strokes and steal information on debit/ credit card or sensitive data.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingEight1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight1" aria-expanded="false" aria-controls="collapseEight1">
                                phishing
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEight1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight1">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/phis.webp" width="100%" height="30%"></div><br>
                            <p>This a technique of extracting confidential information such as credit card numbers and username password combos by masquerading as a legitimate enterprise. Phishing is typically carried out by email spoofing. You’ve probably received email containing links to legitimate appearing websites. You probably found it suspicious and didn’t click the link. Smart move.<br><br>The malware would have installed itself on your computer and stolen private information. Cyber-criminals use social engineering to trick you into downloading malware off the internet or make you fill in your personal information under false pretenses. A phishing scam in an email message can be evaded by keeping certain things in mind.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingNine1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine1" aria-expanded="false" aria-controls="collapseNine1">
                                Cross site scripting
                            </a>
                        </h4>
                    </div>
                    <div id="collapseNine1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine1">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/cross.png" width="100%" height="30%"></div><br>
                            <p>Also known as XSS (formerly CSS, but renamed due to confusion with cascading style sheets), is a very easy way of circumventing a security system. Cross-site scripting is a hard-to-find loophole in a web site, making it vulnerable to attack. In a typical XSS attack, the hacker infects a web page with a malicious client-side script or program. When you visit this web page, the script is automatically downloaded to your browser and executed. Typically, attackers inject HTML, JavaScript, VBScript, ActiveX or Flash into a vulnerable application to deceive you and gather confidential information. If you want to protect your PC from malicious hackers, investing in a good firewall should be first and foremost. Hacking is done through a network, so it’s very important to stay safe while using the internet. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTen1">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen1" aria-expanded="false" aria-controls="collapseTen1">
                                Fake apps
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTen1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen1">
                        <div class="panel-body">
                           <div class="container" style="padding: 10px;height: "><img src="images/fake.jpg" width="100%" height="30%"></div><br>
                            <p>Fake mobile apps are applications that mimic the look and/or functionality of legitimate apps to trick unsuspecting users to install them. Once you download and install these applications, they perform a variety of malicious actions. Some fake applications are built to aggressively display advertisements to get revenue, other apps are designed to collect credentials, intercept sensitive data and infect devices. Most of the users find it difficult to distinguish between real and fake apps. Fake apps may also be found on legitimate app stores such as Apple’s app store or Google Play store etc., in case if they have not yet been detected or reported.<br><br>Some fake apps can take control of your camera, take pictures through your camera, send text messages or steal your personal information. Hackers could also steal a person’s identity through a fake app, which can lead to major trouble for the users. The fake applications are not always suspicious looking apps hidden under a weird name. They can also resemble popular apps like WhatsApp and Pokémon Go have appeared on authorized App Store. </p>
                        </div>
                    </div>
                </div></div></div></div>
    </div>
</div><br><br>
<div class="container">
  <h2 style="text-align: center;text-decoration: underline;"><strong>Tips for preventions of Cyber Crime</strong></h2><br>
 <ul><li><h4 style="font-weight: bold;">Use Strong Passwords</h4>
  <p>Use different user ID / password combinations for different accounts and avoid writing them down. Make the passwords more complicated by combining letters, numbers, special characters (minimum 10 characters in total) and change them on a regular basis.</p></li>
  <li><h4 style="font-weight: bold;">Secure your computer</h4>
    <ul style="margin-left: 60px;"><li><h4 style="font-weight: bold;font-size: 22px;">Activate your firewall</h4>
     <p>Firewalls are the first line of cyber defense; they block connections to unknown or bogus sites and will keep out some types of viruses and hackers.</p></li>
     <li><h5 style="font-weight: bold;font-size: 22px;">Use anti-virus/malware software</h5>
     <p>Prevent viruses from infecting your computer by installing and regularly updating anti-virus software.</p></li>
     <li><h5 style="font-weight: bold;font-size: 22px;">Block spyware attacks</h5>
     <p>Prevent spyware from infiltrating your computer by installing and updating anti-spyware software.</p></li>
    </ul>
  </li>
  <li><h4 style="font-weight: bold;">Be Social-Media Savvy</h4>
  <p>Make sure your social networking profiles (e.g. Facebook, Twitter, Youtube, MSN, etc.) are set to private. Check your security settings. Be careful what information you post online.  Once it is on the Internet, it is there forever!</p></li>
  <li><h4 style="font-weight: bold;">Secure your Mobile Devices</h4>
  <p>Be aware that your mobile device is vulnerable to viruses and hackers.  Download applications from trusted sources.</p></li>
  <li><h4 style="font-weight: bold;">Install the latest operating system updates</h4>
  <p>Keep your applications and operating system (e.g. Windows, Mac, Linux) current with the latest system updates. Turn on automatic updates to prevent potential attacks on older software.</p></li>
  <li><h4 style="font-weight: bold;">Protect your Data</h4>
  <p>Use encryption for your most sensitive files such as tax returns or financial records, make regular back-ups of all your important data, and store it in another location.</p></li>
  <li><h4 style="font-weight: bold;">Secure your wireless network</h4>
  <p>Wi-Fi (wireless) networks at home are vulnerable to intrusion if they are not properly secured. Review and modify default settings. Public Wi-Fi, a.k.a. “Hot Spots”, are also vulnerable. Avoid conducting financial or corporate transactions on these networks.</p></li>
  <li><h4 style="font-weight: bold;">Protect your e-identity</h4>
  <p>Be cautious when giving out personal information such as your name, address, phone number or financial information on the Internet. Make sure that websites are secure (e.g. when making online purchases) or that you’ve enabled privacy settings (e.g. when accessing/using social networking sites).</p></li>
  <li><h4 style="font-weight: bold;">Avoid being scammed</h4>
  <p>Always think before you click on a link or file of unknown origin. Don’t feel pressured by any emails. Check the source of the message. When in doubt, verify the source. Never reply to emails that ask you to verify your information or confirm your user ID or password.</p></li>
  <li><h4 style="font-weight: bold;">Call the right person for help</h4>
  <p>Don’t panic! If you are a victim, if you encounter illegal Internet content (e.g. child exploitation) or if you suspect a computer crime, identity theft or a commercial scam, report this to your local police. If you need help with maintenance or software installation on your computer, consult with your service provider or a certified computer technician.</p></li>
</ul>
</div><br><br><br><br>
<div class="container-fluid pb-0 mb-0 justify-content-center text-light " style="overflow: hidden;
     margin-top: 0px; background: #262626; color: #627482 !important; margin-bottom: 0;padding-bottom: 0">
     <footer  style="font-family: 'Rubik', sans-serif;">
         <div class="row my-5 justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text" style="font-size: calc(34px + (40 - 34) * ((100vw - 360px) / (1600 - 360))) !important">Virtual Crime Alert</h3>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled" style="color: #627482;">
                             <li><a href="index.php" style="color: #6c757d;">Home</a></li>
                             <li><a href="about.php" style="color: #6c757d;">About</a></li>
                             <li><a href="contect.php" style="color: #6c757d;">Contact</li>
                             <li><a href="services.php" style="color: #6c757d;">Services</a></li>
                             <li><a href="helpline.php" style="color: #6c757d;">Helpline</a></li>
                             <li><a href="login.php" style="color: #6c757d;">Login</a></li>
                         </ul>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                        <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Useful Links</b></h6>
                         <p class="mb-1"><a href="#" style="color: #6c757d;">Support</a></p>
                         <p><a href="#" style="color: #6c757d;">Terms&Condition</a></p>
                         <p><a href="#" style="color: #6c757d;">Privacy Policy</a></p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                         <p class="social text-muted mb-0 pb-0 bold-text"> Connect with us<span class="mx-2"><i class="fab fa-facebook-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fab fa-google-plus-square" aria-hidden="true"></i></span> </p><small class="rights"><span><i class="far fa-copyright"></i></span>&nbsp;<span><i class="far fa-registered"></i></span>copyright 2021 VirtualCrimeAlert All Rights Reserved.</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                         <h6 class="mt-55 mt-2 text-muted bold-text"><b>Vinod Chouhan</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> vinodchouhan@gmail.com</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text"><b>Ayush sharma</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> ayushsharma@gmail.com</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text"><b>Nitesh Gupta</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> niteshgupta@gmail.com<br><p style="color:#007bff;">cyber@virtualcrimealert.com</p></small>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
 </div>
 <script type="text/javascript">//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>

<script src="https://partner.googleadservices.com/gampad/cookie.js?domain=bestjquery.com&callback=_gfp_s_&client=ca-pub-3311815518700050&cookie=ID%3D0b70b2f791d3d390-2274e136c1c50085%3AT%3D1610963238%3ART%3D1610963238%3AS%3DALNI_MaFQX86vVF9ZoqwncaEMlQ8tEvf_g"></script>
<script src="https://pagead2.googlesyndication.com/pagead/js/r20210112/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>