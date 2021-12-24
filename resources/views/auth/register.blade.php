@extends('layouts.app2')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><i class="fa fa-edit"></i> Broad Masses Base Membership Registration Form</h2>
        <ol>
          <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
          <li><i class="fa fa-edit"></i> Registration Form</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->


  <section class="inner-page">
    <div class="container">
      @if(Session::has('success'))
        @include('partials.reg_success')
      @else
      <p style="text-align: justify;">
       Dear Sudanese citizen,  Hello and welcome to the Broad Masses Base, your political incubator , social and cultural incubator towards aspiring to chart and sign a true democratic modern future to build a democratic homeland that accommodates everyone enjoying security, peace, stability, freedom, justice, prosperity, development and leadership.Dear citizen, before filling out the registration form, make sure that you read the conditions of registration and joining carefully: <input type="checkbox" id="terms"> <a href="{{route('terms')}}">Terms & Conditions</a>
    </p>
      <hr>
      <form action="{{ route('register.store') }}" method="POST" class="row">
        @csrf
        <div class="col-md-6">
          Full Name
          <input type="text" name="fullname" class="form-control">
        </div>
        <div class="col-md-6">
          Date of Birth
          <input type="date" name="date_of_birth" class="form-control">
        </div>
        <div class="col-md-6">
          Place of Birth
          <input type="text" name="place_of_birth" class="form-control">
        </div>
        <div class="col-md-6">
           National ID/Passport No
           <input type="text" name="passport_no" class="form-control">
        </div>
        <div class="col-md-6">
          Profession (if any)
          <input type="text" name="profession" class="form-control">
        </div>
        <div class="col-md-6">
          Qualification (if any)
          <input type="text" name="qualification" class="form-control">
        </div>
        <div class="col-md-6">
          Job (if any)
          <input type="text" name="job" class="form-control">
        </div>
        <div class="col-md-6">
          Fixed phone number (if any)
          <input type="text" name="fixed_phone" class="form-control">
        </div>
        <div class="col-md-6">
          Mobile Phone
          <input type="text" name="phone" class="form-control">
        </div>
        <div class="col-md-6">
          Email
          <input type="email" name="email" class="form-control">
        </div>
        <div class="col-md-6">
          Current Residence
          <textarea name="current_residence" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
          Skills (Optional)
         <textarea name="skills" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
          Hobby (optional)
         <textarea name="hobby" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
          Languages
          <textarea name="languages" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
           Experience (optional)
          <textarea name="experience" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
         <div class="col-md-6">
          Achievements (optional)
          <textarea name="achievements" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
          Have you ever belonged to any organization or entity (party/movement)  or association (optional)? 
          <select name="party" id="" class="form-control">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="col-md-6">
          Date of joining it?
          <input type="date" name="date_party" class="form-control">
        </div>
        <div class="col-md-6">
          Are you still in the process of survival and affiliation? 
          <select name="survive" id="" class="form-control">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="col-md-6">
          Date of departure or resignation?
          <input type="date" name="date_resign" class="form-control">
        </div>
        <div class="col-md-6">
           Reason for leaving or resigning?
          <textarea name="reason_leaving" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
          Why did you choose to join the Broad Masses Base? 
          <textarea name="reason_join" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
           Do you want to invite others to organize?
            <select name="invite" id="" class="form-control">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="col-md-6">
          Do you have anything to offer to develop this entity? 
            <select name="offer" id="" class="form-control">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
         <div class="col-md-12">
          Ideas that can support the mass base in the present and the future?
          <textarea name="ideas" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-12">
         You can express yourself in no more than thirty words
          <textarea name="yourself" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-md-12">
          Acknowledgment:-
          I’m the owner of the above statements, acknowledge and agree to my joining the broad Masses base 
          <input type="text" name="acknowledgement" class="form-control">
        </div>
        <div class="col-md-12">
          <br>
          <button type="submit" class="btn btn-success">Register</button>
        </div>
      </form>
      @endif
    </div>
  </section>

</main><!-- End #main -->
@endsection
