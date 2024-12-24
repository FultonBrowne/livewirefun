<div>
    <form wire:submit='submit' class="mb-8">
        <div class="mb-4">
            <label>Bird Count</label>
            <input wire:model='count' type="number"/>
        </div>
        <div class="mb-4">
            <label>Notes</label>
            <textarea wire:model='notes'></textarea>
        </div>
        <button>Add a new bird</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Count</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td>{{ $entry->created_at->format('Y-m-d H:i') }}</td>
                    <td>{{ $entry->bird_count }}</td>
                    <td>{{ $entry->notes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
