@inject('Donation', 'App\Models\Donation_Request')

@include('layouts.navbar')
@include('layouts.cssNavbar')

<div style="text-align: center;">
  <div>
    <h2 style="color: crimson"><i>Register data to contact you and tell you the data</i></h2>
    <h6><i>Thank you for doing the necessary tests to protect you, you are now in the final stage</i></h6>
    <h6><i>Proud of you my friend always do good</i></h6>
    <h6><i>After completion, you will receive a message on your phone detailing the time and place</i></h6>
  </div>

  <hr>

  <div class="container">
    <form>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <input type="name" class="form-control-lg" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
          {{-- @error('name')
              <div class="text-danger">{{ $message }}</div>
          @enderror --}}
        </div>
        <div class="col-md-6 col-sm-12">
          <input type="email" class="form-control-lg" placeholder="Enter Your email" name="email" value="{{ old('email') }}">
          {{-- @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror --}}
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6 col-sm-12">
          <input type="number" class="form-control-lg" placeholder="Enter age" name="age" patients_phone value="{{ old('age') }}">
          {{-- @error('age')
              <div class="text-danger">{{ $message }}</div>
          @enderror --}}
        </div>
        <div class="col-md-6 col-sm-12">
          <input type="string" class="form-control-lg" placeholder="Enter phone" name="phone" value="{{ old('phone') }}">
          {{-- @error('phone')
              <div class="text-danger">{{ $message }}</div>
          @enderror --}}
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6 col-sm-12">
          <input type="string" class="form-control-lg" placeholder="Enter Type of blood" name="BloodType" value="{{ old('BloodType') }}">
          {{-- @error('blood')
              <div class="text-danger">{{ $message }}</div>
          @enderror --}}
        </div>
        <div class="col-md-6 col-sm-12">
          <input type="date" class="form-control-lg" placeholder="Enter last donation" name="LastDontation" value="{{ old('LastDontation') }}">
          {{-- @error('last_donation')
              <div class="text-danger">{{ $message }}</div>
          @enderror --}}
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
          <input type="string" class="form-control-lg" placeholder="Enter address" name="address" value="{{ old('address') }}">
        </div>
      </div>

      <br>

      <div>
        <button type="submit" style="width: 17%" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
</div>