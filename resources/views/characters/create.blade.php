@extends('layouts.app')

@section('title', 'Add Character')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-4">
                <p class="text-uppercase text-primary fw-semibold small mb-1">
                    Character archive
                </p>

                <h2 class="mb-1">Add a New Character</h2>

                <p class="text-muted mb-0">
                    Complete all fields to add a character.
                </p>
            </div>

            <form method="POST" action="{{ route('characters.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Character Name
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                    >

                    @error('name')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="element_id" class="form-label">
                        Element
                    </label>

                    <select
                        class="form-select"
                        name="element_id"
                        id="element_id"
                    >
                        <option value="">
                            Choose an element
                        </option>

                        @foreach ($elements as $element)
                            <option
                                value="{{ $element->id }}"
                                @selected(old('element_id') == $element->id)
                            >
                                {{ $element->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('element_id')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="weapon" class="form-label">
                        Weapon
                    </label>

                    <select
                        class="form-select"
                        name="weapon"
                        id="weapon"
                    >
                        <option value="">
                            Choose a weapon
                        </option>

                        @foreach (['Sword', 'Claymore', 'Polearm', 'Catalyst', 'Bow'] as $weapon)
                            <option
                                value="{{ $weapon }}"
                                @selected(old('weapon') === $weapon)
                            >
                                {{ $weapon }}
                            </option>
                        @endforeach
                    </select>

                    @error('weapon')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="rarity" class="form-label">
                        Rarity
                    </label>

                    <select
                        class="form-select"
                        name="rarity"
                        id="rarity"
                    >
                        <option value="">
                            Choose a rarity
                        </option>

                        @foreach ([4, 5] as $rarity)
                            <option
                                value="{{ $rarity }}"
                                @selected((string) old('rarity') === (string) $rarity)
                            >
                                {{ $rarity }}-Star
                            </option>
                        @endforeach
                    </select>

                    @error('rarity')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="is_playable" class="form-label">
                        Playable
                    </label>

                    <select
                        class="form-select"
                        name="is_playable"
                        id="is_playable"
                    >
                        <option value="">
                            Choose an option
                        </option>

                        <option
                            value="1"
                            @selected(old('is_playable') === '1')
                        >
                            Yes
                        </option>

                        <option
                            value="0"
                            @selected(old('is_playable') === '0')
                        >
                            No
                        </option>
                    </select>

                    @error('is_playable')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="remarks" class="form-label">
                        Remarks
                    </label>

                    <textarea
                        class="form-control"
                        name="remarks"
                        id="remarks"
                        rows="3"
                    >{{ old('remarks') }}</textarea>

                    @error('remarks')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Save Character
                    </button>

                    <a
                        class="btn btn-outline-secondary"
                        href="{{ route('characters.index') }}"
                    >
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
