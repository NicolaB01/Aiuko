
@extends('body')

@section('scripts')
<script src="{{ asset('js/multi-selection-diet-intollerances.js') }}" defer></script>
<script src="{{ asset('js/popup.js') }}" defer></script>
@endsection

@section('content')
<div class="snack-div">
  <span><strong>COLAZIONE</strong></span>
  <div class="select-div">
    @if($preferenzeColazione != null && $preferenzeColazione[0]['faColazione'] == 1)
    <div class="select-item-yes selected" id="select-item-yes selected" onclick="showPopup()">
    @else
    <div class="select-item-yes" id="select-item-yes" onclick="showPopup()">
    @endif
      <div>
          <svg width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="tick"> <polyline fill="none" points="3.7 14.3 9.6 19 20.3 5" stroke="#2cc92f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> </g> </g> </g></svg>
        </div>
        SI
      </div>

    @if($preferenzeColazione != null && $preferenzeColazione[0]['faColazione'] == 0)
    <div class="select-item-no selected" id="select-item-no selected" onclick="closePopup()">
    @else
    <div class="select-item-no" id="select-item-no selected" onclick="closePopup()">
    @endif
      <div>
        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 5L4.99998 19M5.00001 5L19 19" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      </div>
      NO
    </div>
  </div>
  <form action="{{route('colazione.store')}}" method="post">
    @csrf
    <h5>Scrivi i tuoi alimenti preferiti</h5>
    @if($preferenzeColazione != null) 
      <textarea name="preferenze" id="preferenze">{{$preferenzeColazione[0]['alimentiPreferiti']}}</textarea>
    @else
      <textarea name="preferenze" id="preferenze"></textarea>
    @endif
    <select name="diet[]" class="custom-select" id="snackSelect" multiple>
      <option value="si" selected>si</option>
      <option value="si">si</option>
      <option value="no" selected>no</option>
      <option value="no">no</option>
    </select>
    <div class="bottoni">
      <a href="{{route('snack.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection