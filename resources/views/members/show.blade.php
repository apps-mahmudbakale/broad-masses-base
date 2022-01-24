@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>View Member</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item"><a href="{{route('admin.members.index')}}">Members</a></li>
	        <li class="breadcrumb-item active">View Member</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->
	    <section class="section profile">
	      <div class="row">
	        <div class="col-xl-4">

	          <div class="card">
	            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

	              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
	              <h2>{{$member->user->name}}</h2>
	              <h3>{{$member->phone}}</h3>
{{-- 	              <div class="social-links mt-2">
	                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
	                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
	                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
	                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
	              </div> --}}
	            </div>
	          </div>

	        </div>

	        <div class="col-xl-8">

	          <div class="card">
	            <div class="card-body pt-3">
	              <!-- Bordered Tabs -->
	              <ul class="nav nav-tabs nav-tabs-bordered">

	                <li class="nav-item">
	                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"> Member Deatails</button>
	                </li>

	                <li class="nav-item">
	                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Other Details</button>
	                </li>
	                @if(!$member->user->password)
	                <li class="nav-item">
	                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-approve">Approve Member</button>
	                </li>
	                @endif
	              </ul>
	              <div class="tab-content pt-2">

	                <div class="tab-pane fade show active profile-overview" id="profile-overview">
	                  <h5 class="card-title">Member Details</h5>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label ">Fullname</div>
	                    <div class="col-lg-9 col-md-8">{{$member->user->name}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Email</div>
	                    <div class="col-lg-9 col-md-8">{{$member->user->email}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Mobile Phone</div>
	                    <div class="col-lg-9 col-md-8">{{$member->phone}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Date of Birth</div>
	                    <div class="col-lg-9 col-md-8">{{$member->date_of_birth}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Place of Birth</div>
	                    <div class="col-lg-9 col-md-8">{{$member->place_of_birth}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Current Residence</div>
	                    <div class="col-lg-9 col-md-8">{{$member->current_residence}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Profession</div>
	                    <div class="col-lg-9 col-md-8">{{$member->profession}}</div>
	                  </div>

	                </div>

	                <div class="tab-pane fade profile-overview" id="profile-edit">
	                  <h5 class="card-title">Other Details</h5>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label ">Passport No</div>
	                    <div class="col-lg-8 col-md-8">{{$member->passport_no}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Qualification</div>
	                    <div class="col-lg-8 col-md-8">{{$member->qualification}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Job</div>
	                    <div class="col-lg-8 col-md-8">{{$member->job}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Fixed Phone</div>
	                    <div class="col-lg-8 col-md-8">{{$member->fixed_phone}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Skills</div>
	                    <div class="col-lg-8 col-md-8">{{$member->skills}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Hobby</div>
	                    <div class="col-lg-8 col-md-8">{{$member->hobby}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Languages</div>
	                    <div class="col-lg-8 col-md-8">{{$member->languages}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Experiences</div>
	                    <div class="col-lg-8 col-md-8">{{$member->experience}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Achivements</div>
	                    <div class="col-lg-8 col-md-8">{{$member->achievements}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Member Any Party</div>
	                    <div class="col-lg-8 col-md-8">{{$member->party}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Date Joined The Party</div>
	                    <div class="col-lg-8 col-md-8">{{$member->date_party}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">survival and affiliation?</div>
	                    <div class="col-lg-8 col-md-8">{{$member->survive}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Date of departure or resignation?</div>
	                    <div class="col-lg-8 col-md-8">{{$member->date_resign}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Reason for leaving or resigning?</div>
	                    <div class="col-lg-8 col-md-8">{{$member->reason_leaving}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Why did you choose to join the Broad Masses Base?</div>
	                    <div class="col-lg-8 col-md-8">{{$member->reason_join}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Do you have anything to offer to develop this entity? </div>
	                    <div class="col-lg-8 col-md-8">{{$member->offer}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">Ideas that can support the mass base in the present and the future? </div>
	                    <div class="col-lg-8 col-md-8">{{$member->ideas}}</div>
	                  </div>

	                   <div class="row">
	                    <div class="col-lg-4 col-md-4 label">About The Member? </div>
	                    <div class="col-lg-8 col-md-8">{{$member->yourself}}</div>
	                  </div>

	                </div>
	                <div class="tab-pane fade profile-overview" id="profile-approve">
	                  <h5 class="card-title">Approve Member</h5>
	                  	<a href="{{route('admin.approve', $member->user->id)}}" class="btn btn-primary btn-block"><i class="bi bi-check-circle"></i> Approve Membership</a>
	                </div>

	              </div><!-- End Bordered Tabs -->

	            </div>
	          </div>

	        </div>
	      </div>
	    </section>

	  </main><!-- End #main -->

 @endsection