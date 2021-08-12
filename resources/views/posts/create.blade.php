<x-layout>
    <x-slot name="title">
        Add Page - Company Module List
    </x-slot>

    <div class="companies-head">
        <div class="companies-head-left">
            <h2>Companies</h2>
        </div>

        <div class="companies-head-right">
            <i class="fas fa-igloo"></i>
            <span>Home</span>
            <i class="fas fa-angle-right"></i>
            <span>Companies</span>
            <i class="fas fa-angle-right"></i>
            <span>Company Add Page</span>
        </div>
    </div>

    <div class="companies-contents">
        <div class="companies-contents-head">
            <h3>Company Add Page</h3>
            <a href="{{ route('posts.index')}}">Back</a>
        </div>

        <form method="post" action="{{ route('posts.store')}}" class="companies-content" enctype="multipart/form-data">
            @csrf

            <div class="content-item">
                <label class="company-content-left"><span>Required</span>Name</label>
                <input type="text" name="name" value="{{ old('name') }}">

                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="content-item">
                <label class="company-content-left"><span>Required</span>Email</label>
                <input type="text" name="email" value="{{ old('email') }}">

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="content-item">
                <label class="company-content-left"><span>Required</span>Postcode</label>
                <input type="text" name="postcode" class="postcode-form" value="{{ old('postcode') }}">
                <input type="submit" name="submit" value="Search" class="postcode-search">

                @error('postcode')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="content-item">
                <label class="company-content-left"><span>Required</span>Prefecture</label>
                <select type="text" name="prefecture" class="form-prefecture">
                    @foreach(config('pref') as $pref_id => $pref)
                        <option value="{{ $pref_id }}" @if(old('prefecture') == $pref_id) selected @endif>{{ $pref }}</option>
                    @endforeach
                </select>

                @error('prefecture')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="content-item">
                <label class="company-content-left"><span>Required</span>City</label>
                <input type="text" name="city" value="{{ old('city') }}">

                @error('city')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="content-item">
                <label class="company-content-left"><span>Required</span>Local</label>
                <input type="text" name="local" value="{{ old('local') }}">

                @error('local')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="content-item">
                <label class="company-content-left">Street Address</label>
                <input type="text" name="street_address" value="{{ old('street_address') }}">
            </div>

            <div class="content-item">
                <label class="company-content-left">Business Hour</label>
                <input type="text" name="business_hour" value="{{ old('business_hour') }}">
            </div>

            <div class="content-item">
                <label class="company-content-left">Regular Holiday</label>
                <input type="text" name="regular_holiday" value="{{ old('regular_holiday') }}">
            </div>

            <div class="content-item">
                <label class="company-content-left">Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="content-item">
                <label class="company-content-left">Fax</label>
                <input type="text" name="fax" value="{{ old('fax') }}">
            </div>

            <div class="content-item">
                <label class="company-content-left">URL</label>
                <input type="text" name="url" value="{{ old('url') }}">
            </div>

            <div class="content-item">
                <label class="company-content-left">License Number</label>
                <input type="text" name="license_number" value="{{ old('license_number') }}">
            </div>

            <div class="content-item">
                <div class="company-content-left"><span>Required</span>Image</div>

                <div class="company-file-submit">
                    <input type="file" name="image" accept="image/png, image/jpeg">
                    <p>画像をアップロードして下さい(推奨サイズ: 1280px x 720px・容量は5MBまで)</p>
                    <img src="/images/no-image.jpg" width="150" height="100">

                    @error('image')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</x-layout>
