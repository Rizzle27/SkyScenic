<div>
    <div>
        @if (session()->has('error'))
            <div>{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="submitForm">

            <div>
                <label for="email">Email:</label>
                <input type="email" wire:model="email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" wire:model="password" required>
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
