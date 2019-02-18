@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

<div>
    <h1 >About Asylum</h1>
    <p>Located in Western New York, Asylum is a private, voluntary association for adults (18 and older) interested in 
	responsibly exploring BDSM. 
	We value the central tenants of ethical BDSM - Safe, Sane and Consensual(SSC), Personal Responsibility Informed Consensual Kink (PRICK) 
	and Risk Aware Consensual Kink( RACK). 
	Our core values revolve around respect, confidentiality and consent.
	We are proudly a Coalition Partner of the 
	<a href="https://ncsfreedom.org/who-we-are/coalition-partners" style="color:#FF0000;" target="_blank">NCSF(National Coalition of Sexual Freedom)</a>. 
	 Interested in learning more? Please <a href="contact" style="color:#FF0000;" >contact us!</a>
    </p> 
    <button type = "button" onclick="location.href='http://www.asylumbuffalo.com'">Home</button>	
    <button type = "button" onclick="location.href='contact'">Contact Us</button>
	
</div>
@endsection
