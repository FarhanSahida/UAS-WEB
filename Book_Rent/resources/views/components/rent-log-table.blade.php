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
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->slug }}</td>
                <td>{{ $item->book->title}}</td>
                <td>{{ $item->rent_date }}</td>
                <td>{{ $item->return_date }}</td>
                <td class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ?  'text-bg-danger' : 'text-bg-success') }}">{{ $item->actual_return_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>