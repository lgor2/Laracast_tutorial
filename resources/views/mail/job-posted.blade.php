<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job is now on our web site!
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job listing</a>
</p>