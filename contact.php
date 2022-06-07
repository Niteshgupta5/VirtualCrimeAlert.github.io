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
  .table {
    border-collapse: separate;
    text-indent: initial;
    border-spacing: 0px;
}
.table .thead-dark th {
    color: #fff;
    background-color: #1e0098;
    border-color: #454d55;
}
  .bg-dark {
    background-color: #1d2124!important;
} 
small {
     font-size: calc(12px + (15 - 12) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .bold-text {
     color: #ffc107 !important;
 }
 h3 {
     font-size: calc(34px + (40 - 34) * ((100vw - 360px) / (1600 - 360))) !important
 }
 .mt-55 {
     margin-top: calc(50px + (60 - 50) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .social {
     font-size: 21px !important
 }

 .rights {
     font-size: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
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
      
      <a class="nav-link active" href="contact.php">Contact</a>
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
<h1 style="text-align: center; margin-top: 30px; margin-bottom: 3px; line-height: 1;text-decoration: underline;">Contact us</h1><br>
 <div class="container-fluid" style="text-align: center; background-color: black; width: 100%;color:#ffc107;">State/UT Nodal Officer and Grievance Officer contact details</div>
<div class="container-fluid" style="color: red;"><marquee>Note: Complainant who registered complaint,may contact the respective State/UT Nodal Officer or Grievance Officer if the response has not been appropriate.</marquee></div>
  <table style="width: 100%;"><tr>          
     <td style="width: 50%; text-align: center; background-color: #d3b48c;"><b>Nodal Cyber cell Officer</b></td>
     <td style="width: 100%; text-align: center; background-color: khaki;"><b>Grievance Officer Details</b></td>
 </tr></table>
  <div class="table-responsive-sm" style="overflow-x: scroll; overflow-y: scroll;">          
  <table class="table" border="1" cellpadding="1px;" cellspacing="0px;">
    
    <thead class="thead-dark">
      <tr>
        <th scope="col" style="width: 3%">S.No.</th>
        <th scope="col" style="width: 10%">State/UT&#39;s</th>
        <th scope="col" style="width: 12%">Name</th>
        <th scope="col" style="width: 5%">Rank</th>
        <th scope="col" style="width: 20%">Email</th>
        <th scope="col" style="width: 3%">S.No.</th>
        <th scope="col" style="width: 12%">Name</th>
        <th scope="col" style="width: 5%">Rank</th>
        <th scope="col" style="width: 10%">Contact</th>
        <th scope="col" style="width: 20%">Email</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>  1 </td><td>ANDAMAN &amp; NICOBAR</td><td>Sh.Madhup Tiwari</td><td>ADGP</td><td>igp.and@nic.in</td><td>1</td><td>Sh.Deependra Pathak</td><td>DGP</td><td>03192230216</td><td>dgp[dot]and[at]nic[dot]in</td>
        
      </tr>
      <tr>
        <td> 2 </td><td>ANDHRA  PRADESH</td><td>Ms. G. Radhika</td><td>SP</td><td>cybercrimes-cid[at]ap[dot]gov[dot]in</td><td>2</td><td>Shri M.Sunil Kumar Naik  IPS</td><td>DIGP</td><td>0863-2340183</td><td>cybercrimes-cid[at]ap[dot]gov[dot]in</td>
      </tr>
      <tr>
         <td> 3</td><td>ARUNACHAL PRADESH</td><td>Dr.Hemant Tiwari</td><td>SP</td><td>spcr[at]arunpol[dot]nic[dot]in</td><td>3</td><td>Sh.Rake Ringu</td><td>IGP</td><td>9436040703</td><td>sit[at]arunpol[dot]nic[dot]in</td>
      </tr>
      <tr>
         <td> 4 </td><td>ARUNACHAL PRADESH</td><td>Sh. Navdeep Singh Brar</td><td>SP</td><td>spcr[at]arunpol[dot]nic[dot]in</td><td>4</td><td>Sh. Take Ringu</td><td>DIGP</td><td>0360-2215518</td><td>sit[at]arunpol[dot]nic[dot]in</td>
        </tr><tr>
            <td> 5</td><td>ASSAM</td><td>Shri Lachit Baruah, IPS</td><td>ADGP</td><td>digp-cid[at]assampolice[dot]gov[dot]in</td><td>5</td><td>Sh. Surendra kumar</td><td>IGP</td><td>9435049634</td><td>igp-cid[at]assampolice[dot]gov[dot]in</td>
        </tr><tr>
            <td> 6 </td><td>BIHAR</td><td>1.Sh.Jitender Singh 2.Kumar sagar</td><td>Addl.DGP</td><td>cybercell-bih[at]nic[dot]in</td><td>6</td><td>Sh. Shiv Kumar Jha</td><td>DIG</td><td>9470001373</td><td>dgp-bih[at]nic[dot]in</td>
        </tr><tr>
            <td>7 </td><td>CHANDIGARH</td><td>Sh Omvir Singh Bishnoi</td><td>DIG</td><td>dig-chd[at]nic[dot]in</td><td>7</td><td>Ms. Neha yadav </td><td>SP</td><td>9779580946</td><td>pssput-chd[at]nic[dot]in</td>
        </tr><tr>
            <td>8</td><td>CHHATTISGARH</td><td>Sh.Manish Sharma</td><td>AIG</td><td>aigtech-phq[dot]cg[at]gov[dot]in</td><td>8</td><td>Sh. Kavi Gupta </td><td>DSP</td><td>9479191785</td><td>cybercell-phq[dot]cg[at]gov[dot]in</td>
        </tr><tr >
            <td> 9 </td><td>DADRA &amp; NAGAR HAVELI</td><td>Ms. Manasvi Jain</td><td>Dy. SP</td><td>itcell-dnhp[at]mha[dot]gov[dot]in</td><td>9</td><td>Sh. Sharad Bhaskar</td><td>SP</td><td>0260-2643022</td><td>sp-sil-dnh[at]nic[dot]in</td>
        </tr><tr>
            <td>10</td><td>DAMAN &amp; DIU</td><td>Sh. Hareshwar V. Swami, IPS</td><td>SP</td><td>sp-diu-dd[at]nic[dot]in</td><td>10</td><td>Sh. Vikramjit Singh IPS</td><td>SP</td><td>0260-2250942</td><td>sp-dmn-dd[at]nic[dot]in</td>
        </tr><tr >
            <td>11 </td><td>DELHI</td><td>Sh Anyesh Roy</td><td>DCP</td><td>ncrp[dot]delhi[at]delhipolice[dot]gov[dot]in</td><td>11</td><td>Mr. Prem Nath</td><td>Addl.CP</td><td>011-20892633</td><td>addlcp[dot]cybertech[at]delhipolice[dot]gov[dot]in</td>
        </tr><tr>
            <td>12</td><td>GOA</td><td>Sh.Sobhit saxena </td><td>SP</td><td>spcyber[at]goapolice[dot]gov[dot]in</td><td>12</td><td>Sh. Paramaditya</td><td>DIGP</td><td>0832-2420883</td><td>digpgoa[at]goapolice[dot]gov[dot]in</td>
        </tr><tr>
            <td> 13</td><td>GUJARAT</td><td>Sh. Saurabh Tolumbia</td><td>SP</td><td>cc-cid[at]gujarat[dot]gov[dot]in</td><td>13</td><td>Sh SG Trivedi</td><td>IGP</td><td>079-23254422</td><td>adgpcrime1[at]gujarat[dot]gov[dot]in</td>
        </tr><tr>
            <td> 14 </td><td>HARYANA</td><td>Shri Pankaj Nain, IPS</td><td>SP</td><td>sp[dot]crime2pkl[at]hry[dot]nic[dot]in</td><td>14</td><td>Shri Desh Raj Singh, IPS</td><td>ADGP (Crime)</td><td>7814641313</td><td>igp[dot]crime[at]hry[dot]nic[dot]in</td>
        </tr><tr >
            <td>15 </td><td>HIMACHAL PRADESH</td><td>Sh. Sandeep Dhawal</td><td>Addl.SP</td><td>polcyberps-shi-hp[at]nic[dot]in</td><td>15</td><td>Sh. Anant Pratap Singh</td><td>IG</td><td>0177-2627955</td><td>anantpratap[dot]singh[at]nic[dot]in</td>
        </tr><tr >
            <td>16</td><td>JAMMU &amp; KASHMIR</td><td>Sh Manish Kumar </td><td>IGP</td><td>igcrime-jk[at]nic[dot]in</td><td>16</td><td>Sh. RR Swan</td><td>DGP</td><td>0191-25822926</td><td>adgpcidjk[at]jkpolice[dot]gov[dot]in</td>
        </tr><tr >
            <td>17</td><td>JHARKHAND</td><td>Ms. Anil Kumar Jha </td><td>SP</td><td>spcyberps[at]jhpolice[dot]gov[dot]in</td><td>17</td><td>Sh. Ranjit Prasad(Retired)</td><td>IGP</td><td>06512490046</td><td>ig-orgcid[at]jhpolice[dot]gov[dot]in</td>
        </tr><tr >
            <td> 18</td><td>KARNATAKA</td><td>Sh M D SHARATH</td><td>SP (Cyber Crime Division)</td><td>sharath[dot]md[at]gov[dot]in</td><td>18</td><td>Sh. Ramesh</td><td>DIGP</td><td>080-22251817</td><td>digadmincod[at]ksp[dot]gov[dot]in</td>
        </tr><tr>
            <td> 19</td><td>KERALA</td><td>Sh Sreejith</td><td>IGP</td><td>igpcbtvmr[dot]pol[at]kerala[dot]gov[dot]in</td><td>19</td><td>Sh. Dr. Shaik Darvesh</td><td>ADGP</td><td>0471-2722215</td><td>adgpcrimes[dot]pol[at]kerala[dot]gov[dot]in</td>
        </tr><tr>
            <td> 20</td><td>LADAKH</td><td>Ms. Nilga Angmo</td><td>DSP</td><td>soto-igp[at]police[dot]ladakh[dot]gov[dot]in</td><td>20</td><td>Gaurav Mahajan</td><td>SP</td><td>9419182740</td><td>soto-igp[at]police[dot]ladakh[dot]gov[dot]in</td>
        </tr><tr>
            <td>21</td><td>Lakshadweep</td><td>Sh Ramdulesh Meena</td><td>DSP</td><td>lak-sop[at]nic[dot]in</td><td>21</td><td>Sh. Shibesh Singh</td><td>SSP</td><td>04896-262258</td><td>lak-sop[at]nic[dot]in</td>
        </tr><tr >
            <td> 22 </td><td>Madhya Pradesh</td><td>Sh Niranjan B Vayangankar</td><td>DIGP</td><td>mpcyberpolice[at]mppolice[dot]gov[dot]in</td><td>22</td><td>Smt. Aruna Mohan Rao</td><td>SPL DGP</td><td>0755-2770248</td><td>spl[dot]dgp-cybercell[at]mppolice[dot]gov[dot]in</td>
        </tr><tr>
            <td>  23 </td><td>MAHARASHTRA</td><td>Sh Balsing Rajput</td><td>SP</td><td>sp[dot]cbr-mah[at]gov[dot]in</td><td>23</td><td>Sh. Brijesh Singh</td><td>SPL IGP/ DGP</td><td>022-22160080</td><td>ig[dot]cbr-mah[at]gov[dot]in</td>
        </tr><tr>
            <td>24</td><td>Manipur</td><td>Ms. Joyce Lalremmawi</td><td>SP</td><td>cidcb-mn[at]nic[dot]in</td><td>24</td><td>Sh. Themthing Ngashangva</td><td>DIGP</td><td>0385-2450573</td><td>themthing[dot]ng[at]gov[dot]in</td>
        </tr><tr >
            <td>25</td><td>Meghalaya</td><td>Sh. Vivek Anand Singh</td><td>SSP</td><td>sspcid-meg[at]gov[dot]in</td><td>25</td><td>Sh. Dr.Dolton.p. Mark</td><td>DIGP</td><td>0364-2550141</td><td>dig[dot]cid-meg[at]gov[dot]in</td>
        </tr><tr >
            <td> 26</td><td>MIZORAM</td><td>Sh. Neihchungnunga</td><td>DIG</td><td>cidcrime-mz[at]nic[dot]in</td><td>26</td><td>Sh.S.B.K Singh</td><td>DGP</td><td>0389-2334682  </td><td>polmizo[at]rediffmail[dot]com</td>
        </tr><tr>
            <td> 27</td><td>Nagaland</td><td>Sh Zekotso Mero</td><td>IGP</td><td>cybercrimeps-ngl[at]gov[dot]in</td><td>27</td><td>Sh. Renchamo P. Kikon</td><td>ADGP</td><td>0370-2223897</td><td>renchamo[dot]p[at]gov[dot]in</td>
        </tr><tr>
            <td>28</td><td>ODISHA</td><td>Sh Bijay Kr Mallick</td><td>DSP</td><td>dirscrb[dot]odpol[at]nic[dot]in</td><td>28</td><td>Sh.Sarthak Sarangi</td><td>SP</td><td>0671-2306071</td><td>sp1cidcb[dot]orpol[at]nic[dot]in</td>
        </tr><tr>
            <td> 29</td><td>PUDUCHERRY</td><td>Sh. Rahul Alwal</td><td>SSP</td><td>cybercell-police[dot]py[at]gov[dot]in</td><td>29</td><td>Sh. Dr. VJ Chandran</td><td>DIGP</td><td>0413-2231386</td><td>dig[dot]pon[at]nic[dot]in</td>
        </tr><tr>
            <td>30</td><td>PUNJAB</td><td>Ms.N.V Jagadale</td><td>AIG</td><td>aigcc[at]punjabpolice[dot]gov[dot]in</td><td>30</td><td>Sh. G.Nageshwar Rao</td><td>DIGP</td><td>0172-2218444</td><td>igp[dot]cyber[dot]c[dot]police[at]punjab[dot]gov[dot]in</td>
        </tr><tr>
            <td>31</td><td>RAJASTHAN</td><td>Sh. Umesh Nitharwal</td><td>dy.SP</td><td>ccps-raj[at]nic[dot]in</td><td>31</td><td>Sh. Digant Anand</td><td>SP </td><td>0141-2309547</td><td>ccps-raj[at]nic[dot]in</td>
        </tr><tr >
            <td> 32</td><td>Sikkim</td><td>Sh. Tenzing Lodan lepcha</td><td>SP</td><td>spcid[at]sikkimpolice[dot]nic[dot]in</td><td>32</td><td>Sh. Sonam Detchu Bhutia</td><td>DySP</td><td>03592-204297</td><td>spcid[at]sikkimpolice[dot]nic[dot]in</td>
        </tr><tr>
            <td>33 </td><td>TAMIL NADU</td><td>Tmt. A.Kayalvizhi (for Women and Children related)</td><td>SP</td><td>sp2cwc[dot]dgp[at]tn[dot]gov[dot]in</td><td>33</td><td>Shri Shankar K.</td><td>IGP</td><td>044-28447620</td><td>sp1-cwctnpolice[at]gov[dot]in</td>
        </tr><tr >
            <td>34 </td><td>TAMIL NADU</td><td>Sh. Saroj kumar., SP (for OTHER CYBER CRIMES)</td><td>SP</td><td>sp1-ccdtnpolice[at]gov[dot]in</td><td>34</td><td>Shri Shankar K.</td><td>IGP</td><td>044-29580300</td><td>sp1-ccdtnpolice[at]gov[dot]in</td>
        </tr><tr>
            <td> 35</td><td>TELANGANA</td><td>Sh. Rajesh Kumar </td><td>DIG</td><td>ccps[dot]cid[at]tspolice[dot]gov[dot]in</td><td>35</td><td>Smt. Swathi Lakra</td><td>IGP</td><td>040-23147604</td><td>igp_wpc[at]cid[dot]tspolice[dot]gov[dot]in</td>
        </tr><tr>
            <td>36</td><td>TRIPURA</td><td>Sh. Ajit Pratap Singh</td><td> Dy.SP (Crime)</td><td>spcybercrime[at]tripurapolice[dot]nic[dot]in</td><td>36</td><td>Shri Subrata Chakraborty</td><td>AIGP,Crime</td><td>0381-2321741</td><td>aigcrime[at]tripurapolice[dot]nic[dot]in</td>
        </tr><tr>
            <td>37
 </td><td>UTTARAKHAND</td><td>Sh. Ajay Singh </td><td>SSP/STF</td><td>ccps[dot]deh[at]uttarakhandpolice[dot]uk[dot]gov[dot]in</td><td>37</td><td>Sh.Anshuman AP</td><td>IGP</td><td>0135-2712563</td><td>dgc-police-ua[at]nic[dot]in</td>
        </tr><tr>
            <td>38
       </td><td>UTTAR PRADESH</td><td>Prof. Triveni Singh, IPS</td><td>DIG</td><td>sp-cyber[dot]lu[at]up[dot]gov[dot]in</td><td>38</td><td>Sh.Ram Kumar</td><td>ADGP</td><td>0522-2390538</td><td>ccpsstf[dot]gb-up[at]gov[dot]in</td>
        </tr><tr>
            <td> 39 </td><td>WEST BENGAL</td><td>Sh. Mitesh Jain, IPS</td><td>DIG Cyber</td><td>ccpwb[at]cidwestbengal[dot]gov[dot]in</td><td>39</td><td>Sh. Anand Kumar, IPS</td><td>IG-CID</td><td>033-24506100</td><td>ig2[at]cidwestbengal[dot]gov[dot]in</td>
        </tr>
    </tbody>
  </table>
  </div>

	
    <div class="container-fluid pb-0 mb-0 justify-content-center text-light " style="overflow: hidden;
     margin-top: 0px; background: #262626; color: #627482 !important; margin-bottom: 0;padding-bottom: 0">
     <footer  style="font-family: 'Rubik', sans-serif;">
         <div class="row my-5 justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text">Virtual Crime Alert</h3>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>Menu</b></h6>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
