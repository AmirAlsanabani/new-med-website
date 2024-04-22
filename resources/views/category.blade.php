<h1>{{ $medicineCategory->name }}</h1>
<p>{{ $medicineCategory->description }}</p>

<h2>Medicines</h2>
<ul>
    @foreach ($medicines as $medicine)
        <li>{{ $medicine->commercial_name }}</li>
    @endforeach
</ul>