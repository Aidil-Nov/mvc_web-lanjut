<h1>Data Users</h1>
<ul>
    @foreach($allUsers as $user)
    <li>{{ $user->name }} ({{ $user->email }})</li>
    @endforeach
</ul>

<hr>

<h2>User Pertama</h2>
@if($firstUser)
<p>{{ $firstUser->name }} - {{ $firstUser->email }}</p>
@else
<p>Data Kosong</p>
@endif

<hr>

<h2> 
    Pluck - Nama Saja
</h2>
<ul>
    @foreach($userNames as $name)
    <li>{{ $name }}</li>
    @endforeach
</ul>

<hr>

<h2>Jumlah Users</h2>
<p>Total: {{ $userCount }}</p>

<hr>
<h2>User Diurutkan (orderby name)</h2>
<ul>
    @foreach($orderedUsers as $user)
    <li>{{ $user->name }}</li>
    @endforeach
</ul>

<hr>

<h2>2 user pertama (limit)</h2>
<ul>
    @foreach($limitedUsers as $user)
    <li>{{ $user->name }}</li>
    @endforeach
</ul>