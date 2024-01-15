<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Buku</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($rentlog as $item)
                <tr class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ?  'text-bg-danger' : 'text-bg-success') }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->username}}</td>
                <td>{{ $item->title}}</td>
                <td>{{ $item->rent_date }}</td>
                <td>{{ $item->return_date }}</td>
                <td>{{ $item->actual_return_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>