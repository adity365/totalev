@foreach($jobseekers as $jobseeker)
<div class="col-md-4 col-sm-6 mb-3">
    <div class="job-box1">
        <h5>
            <a href="#">{{ $jobseeker->name }} - {{ ucfirst($jobseeker->gender ?? 'N/A') }}, {{ \Carbon\Carbon::parse($jobseeker->dob)->age }}</a>
            <div class="apply-btn-container">
                <button class="btn btn-primary btn-sm apply-btn bg1">Hire Now</button>
                @php $photo = $jobseeker->profile_photo_path; @endphp
                    <img src="{{ asset('storage/' . $photo) }}" alt="Apply Now Background" class="apply-btn-bg">
            </div>
        </h5>

        <div class="job-info1">
            <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> {{ $areas[$jobseeker->area] ?? 'Not Set' }}, {{ $cities[$jobseeker->city] ?? 'Not Set'}} </p>
        </div>

        <p><strong>Category :</strong> {{ $jobseeker->job_category ?? 'N/A' }}</p>
        <p><strong>Education :</strong> {{ ucfirst($jobseeker->education ?? 'N/A') }}</p>

        <div class="job-info1">
            <p><strong>Exp. :</strong> <span class="bg2">{{ $jobseeker->experience_years ?? 'N/A' }}</span></p>
            <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2">{{ $jobseeker->expected_salary ?? 'N/A' }}</span></p>
        </div>

        <p class="mt-1 d-flex align-items-center">
            <strong>Skill :</strong>
            @php
                $skills = json_decode($jobseeker->job_skills, true) ?? [];
            @endphp

            @foreach($skills as $skill)
                @if(trim($skill) != '') <span class="skills-container">{{ trim($skill) }}</span> @endif
            @endforeach
        </p>

        <p><strong>Verified :</strong> {{ $jobseeker->email ?? 'N/A' }}</p>

        <div class="icon-container">
            <i class="fas fa-bookmark"></i>
            <i class="fas fa-share-alt"></i>
        </div>
    </div>
</div>
@endforeach