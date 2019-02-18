@extends('layouts.app')

@section('title')
 About Asylum
@endsection

@section('sidebar')
    @parent

@endsection

@section('content')

<div>
    <h1 >About Asylum</h1>
    <p>Located in Western NY, Asylum is a private, voluntary association for adults interested in 
	responsibly exploring BDSM. 
	We value the central tenants of ethical BDSM - Safe, Sane and Consensual(SSC), Personal Responsibility Informed Consensual Kink (PRICK) 
	and Risk Aware Consensual Kink( RACK). 
	Our core values include respect, confidentiality and consent.
	We are proudly a Coalition Partner of the 
	<a href="https://ncsfreedom.org/who-we-are/coalition-partners" style="color:#FF0000;" target="_blank">NCSF(National Coalition of Sexual Freedom)</a>. 

    </p> 
    <button type = "button" onclick="location.href='/'">Home</button>	
    <button type = "button" onclick="location.href='contact'">Contact Us</button>
	
</div>
@endsection
