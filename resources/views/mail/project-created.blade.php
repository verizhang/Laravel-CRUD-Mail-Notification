@component('mail::message')
# Your "{{$project->title}}" Project has created

{{$project->description}}

@component('mail::button', ['url' => url('/project/'. $project->id)])
View Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
