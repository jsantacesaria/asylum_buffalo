@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="bg-image"></div>

<div class="bg-text">
    <h1 >About Asylum</h1>
    <p>Located in the Buffalo and Greater Western New York area, Asylum is a private, voluntary association for adults (18 and older) with an interest in 
	responsibly exploring the BDSM lifestyle. 
	We value the central tenants of ethical BDSM - Safe, Sane and Consensual(SSC), Personal Responsibility Informed Consensual Kink (PRICK) 
	and Risk Aware Consensual Kink( RACK). 
	Our core values revolve around respect, confidentiality and consent (Did we mention consent?).
	We are proudly a Coalition Partner of the 
	<a href="https://ncsfreedom.org/who-we-are/supporting-members" target="_blank">NCSF(National Coalition of Sexual Freedom)</a>. 
	 Curious? Interested in learning more? Want to become a member? 
	Please <a href="contact">contact us!</a>
    </p> 
    <button type = "button" onclick="location.href='http://www.asylumbuffalo.com'">Home</button>	
    <button type = "button" onclick="location.href='contact'">Contact Us</button>
</div>
	
</div>
@endsection
