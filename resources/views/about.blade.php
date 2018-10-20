<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome To The Asylum</title>
<meta name="description" content="Asylum">
<meta name="author" content="Asylum">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("lightened_black-and-white-photography-3300930_1920.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text{
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 6px solid black;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
    <h1 >About Asylum</h1>
    <p>Located in the Buffalo and Greater Western New York area, Asylum is a private, voluntary association for adults (18 and older) with an interest in 
	responsibly exploring the BDSM lifestyle. 
	We value the central tenants of ethical BDSM - Safe, Sane and Consensual(SSC), Personal Responsibility Informed Consensual Kink (PRICK) 
	and Risk Aware Consensual Kink( RACK). 
	Our core values revolve around respect, confidentiality and consent (Did we mention consent?).
	We are proudly a Supporting Member of the 
	<a href="https://ncsfreedom.org/who-we-are/supporting-members">NCSF(National Coalition of Sexual Freedom)</a>. 
	 Curious? Interested in learning more? Want to become a member? 
	Please <a href="contact">contact us!</a>
    </p> 
    <button type = "button" onclick="location.href='http://www.asylumbuffalo.com'">Home</button>	
    <button type = "button" onclick="location.href='contact'">Contact Us</button>
</div>
	
</div>

</body>
</html>

