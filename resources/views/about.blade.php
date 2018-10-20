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
  z-index: 2;
  text-align: center;
  color: black;
}

.actions {
  z-index: 2;
}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
    <h1 style="font-size:50px">About Asylum</h1>
	<p>Located in the Greater Western New York area, Asylum is a private, voluntary association for adults (18 and older) with an interest in 
	responsibly exploring the BDSM lifestyle. 
	We value the central tenants of ethical BDSM - Safe, Sane and Consensual(SSC), Personal Responsibility Informed Consensual Kink (PRICK) 
	and Risk Aware Consensual Kink( RACK). 
	Our core values revolve around respect, confidentiality and consent (Did we mention consent?).
	We are proudly a Supporting Member of the 
	<a href="https://ncsfreedom.org/who-we-are/supporting-members">NCSF(National Coalition of Sexual Freedom)</a>. 
	 Curious? Interested in learning more? Want to become a member? 
	Please <a href="contact">contact us!</a></p> 
</div>
<div class="actions">
    <button type = "button" onclick="location.href='welcome'">Home</button>	
    <button type = "button" onclick="location.href='contact'">Contact Us</button>
</div>
	
</div>

</body>
</html>

