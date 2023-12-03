<div>
    <h2 class="text-light text-center my-3 fs-3">Subir una foto</h2>
    <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" action="" method="POST">
        @csrf
        <div class="d-flex flex-column text-center">
            <label for="img_path" hidden></label>
            <input class="form-control" type="file" name="img_path" onchange="loadFile(event)" />

            <img class="w-100 rounded-4 my-3 bg-black" id="img_path_output">
        </div>

        <div>
            <label for="aircraft" hidden></label>
            <input class="custom-fillable-input text-light w-100" type="text" name="aircraft" placeholder="Aeronave"
                wire:model="aircraft" wire:keydown="handleAircraftKeydown">
            @if (!empty($aircraft) && count($aircraftSearchResults) > 0)
                <ul class="list-unstyled input-select-options-container">
                    @foreach ($aircraftSearchResults as $result)
                        <li class="text-dark input-select-option" wire:click="selectAircraftResult('{{ $result }}')">
                            {{ $result }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <label for="airline" hidden></label>
            <input class="custom-fillable-input text-light w-100" type="text" name="airline" placeholder="Aerolínea"
                wire:model="airline" wire:keydown="handleAirlineKeydown">
            @if (!empty($airline) && count($airlineSearchResults) > 0)
                <ul class="list-unstyled input-select-options-container">
                    @foreach ($airlineSearchResults as $result)
                        <li class="text-dark input-select-option" wire:click="selectAirlineResult('{{ $result }}')">
                            {{ $result }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <label for="license_plate" hidden></label>
            <input class="custom-fillable-input text-light w-100" type="text" name="license_plate"
                placeholder="Licencia">
        </div>
    </form>
</div>
