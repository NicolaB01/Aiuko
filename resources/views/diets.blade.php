@extends('body')

@section('content')
<div class="diet-div">
  <div class="logo"></div>
  <span>STO <strong>SEGUENDO</strong> <br> UNA <strong>DIETA</strong> </span>

  <div class="select-div">
    @if(in_array('vegetariana', $diete))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M48.1429 35.4071C45.8951 36.7735 43.3133 37.4921 40.6828 37.4836C38.479 37.4661 36.3001 37.0154 34.2703 36.1571C32.7059 38.3656 31.8686 41.0068 31.875 43.7133V50.625C31.8755 50.8821 31.8232 51.1365 31.7213 51.3725C31.6194 51.6084 31.4701 51.8209 31.2826 51.9968C31.0951 52.1726 30.8735 52.308 30.6315 52.3946C30.3895 52.4812 30.1322 52.5171 29.8757 52.5C29.3938 52.4581 28.9455 52.2355 28.6208 51.8769C28.2961 51.5183 28.119 51.0502 28.125 50.5664V47.6508L19.0734 38.5992C17.7279 39.1012 16.3048 39.3638 14.8687 39.375C12.8917 39.3799 10.9517 38.8389 9.26247 37.8117C4.15543 34.7086 1.40622 27.5672 1.93825 18.7008C1.96503 18.2421 2.15933 17.8092 2.48423 17.4843C2.80914 17.1594 3.24204 16.9651 3.70075 16.9383C12.5672 16.4156 19.7086 19.1555 22.8023 24.2625C24.0178 26.2643 24.5485 28.6074 24.314 30.9375C24.2995 31.1181 24.2329 31.2905 24.1224 31.434C24.0119 31.5775 23.8622 31.686 23.6914 31.7462C23.5206 31.8064 23.336 31.8159 23.1599 31.7735C22.9838 31.731 22.8238 31.6385 22.6992 31.5071L18.1992 26.7961C17.8447 26.4593 17.3727 26.2743 16.8837 26.2806C16.3948 26.2869 15.9277 26.4839 15.5819 26.8296C15.2362 27.1754 15.0391 27.6425 15.0329 28.1314C15.0266 28.6204 15.2116 29.0924 15.5484 29.4469L28.1765 42.3961C28.1906 42.2133 28.207 42.0305 28.2257 41.85C28.6358 38.3736 30.1698 35.1263 32.5945 32.6016L44.4515 20.0719C44.8034 19.7204 45.0011 19.2435 45.0014 18.7462C45.0016 18.2488 44.8042 17.7718 44.4527 17.4199C44.1012 17.0681 43.6243 16.8703 43.127 16.8701C42.6296 16.8699 42.1526 17.0673 41.8007 17.4188L30.3164 29.5641C30.2014 29.6858 30.0559 29.7746 29.8951 29.8211C29.7342 29.8676 29.5638 29.8702 29.4016 29.8286C29.2394 29.7869 29.0913 29.7026 28.9728 29.5844C28.8542 29.4662 28.7694 29.3183 28.7273 29.1563C27.6164 25.0594 28.1062 20.9813 30.2273 17.4797C34.4132 10.5703 44.1539 6.8719 56.2851 7.5844C56.7438 7.61118 57.1767 7.80548 57.5016 8.13038C57.8265 8.45529 58.0208 8.88819 58.0476 9.3469C58.7507 21.4805 55.0523 31.2211 48.1429 35.4071Z" fill="#4ECB71"/>
        </svg>
      </div>
      Vegetariana</div>
    @if(in_array('vegana', $diete))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="38" height="58" viewBox="0 0 38 58" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M32.5922 13.8007C29.4922 8.54856 25.0913 4.18366 19.8139 1.12691L18.875 0.583862L17.9361 1.12691C12.5689 4.22443 8.11207 8.68091 5.0142 14.0479C1.91632 19.415 0.286615 25.5033 0.289065 31.7002C0.289065 32.1039 0.296097 32.5139 0.309808 32.9189C0.49637 38.4099 2.59625 43.0302 6.38246 46.2804C9.27981 48.7677 12.9963 50.2861 17.0005 50.6484V57.125H20.7505V27.125H17V46.8743C10.6644 46.1404 4.35864 41.6648 4.05735 32.7914C4.04492 32.4287 4.0386 32.0616 4.0386 31.7002C4.04976 26.3493 5.41631 21.0886 8.01072 16.4087C10.6051 11.7289 14.3428 7.78266 18.875 4.9382C23.4071 7.78271 27.1447 11.729 29.739 16.4088C32.3334 21.0886 33.6998 26.3494 33.7109 31.7002C33.7109 32.0616 33.7046 32.4287 33.6922 32.7916C33.4513 39.89 29.3672 44.1736 24.4995 45.9794V49.9482C27.0254 49.2322 29.3678 47.9813 31.3675 46.2802C35.1538 43.03 37.2536 38.4096 37.4402 32.9188C37.4539 32.5138 37.4609 32.1038 37.4609 31.7001C37.4643 25.4061 35.7832 19.2258 32.5922 13.8007Z" fill="#4ECB71"/>
        </svg>
      </div>
      Vegana</div>
    @if(in_array('low-carbo', $diete))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.94172 38.2749C6.68839 41.5283 6.68672 46.8049 9.94172 50.0591C13.1959 53.3141 18.4742 53.3141 21.7276 50.0599L50.0609 21.7266C53.3142 18.4708 53.3142 13.1949 50.0609 9.94161C46.8051 6.68578 41.5292 6.68578 38.2751 9.94078L9.94172 38.2749Z" fill="#F4AA41"/>
        <path d="M9.94172 38.2749C6.68839 41.5283 6.68672 46.8049 9.94172 50.0591C13.1959 53.3141 18.4742 53.3141 21.7276 50.0599L50.0609 21.7266C53.3142 18.4708 53.3142 13.1949 50.0609 9.94161C46.8051 6.68578 41.5292 6.68578 38.2751 9.94078L9.94172 38.2749Z" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M38.2751 9.9408C35.0209 13.195 35.0209 18.4716 38.2751 21.7258M31.1918 17.0241C27.9376 20.2783 27.9376 25.555 31.1918 28.8091M24.1084 24.1075C20.8551 27.3625 20.8551 32.6391 24.1084 35.8925M17.0251 31.1916C13.7717 34.4458 13.7717 39.7225 17.0251 42.9766" stroke="black" stroke-width="1.11111" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      Bassi <br>carboidrati</div>
    @if(in_array('nessuna', $diete))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_85_281)">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 54.375C34.2791 54.3813 38.4838 53.2557 42.1875 51.1125V43.125C42.1875 40.8872 41.2985 38.7411 39.7162 37.1588C38.1339 35.5765 35.9878 34.6875 33.75 34.6875H26.25C24.0122 34.6875 21.8661 35.5765 20.2838 37.1588C18.7014 38.7411 17.8125 40.8872 17.8125 43.125V51.1125C21.5162 53.2557 25.7209 54.3813 30 54.375ZM47.8125 43.125V46.6388C51.0551 43.1674 53.2128 38.8242 54.0203 34.1431C54.8277 29.462 54.2498 24.6469 52.3575 20.2898C50.4652 15.9328 47.341 12.2235 43.369 9.61816C39.397 7.01278 34.7503 5.62478 30 5.62478C25.2497 5.62478 20.603 7.01278 16.631 9.61816C12.659 12.2235 9.53479 15.9328 7.6425 20.2898C5.75021 24.6469 5.17227 29.462 5.97973 34.1431C6.78719 38.8242 8.94486 43.1674 12.1875 46.6388V43.125C12.1875 40.2258 13.0831 37.3974 14.7518 35.0265C16.4205 32.6557 18.7808 30.8582 21.51 29.88C20.094 28.2512 19.1763 26.2495 18.8665 24.1136C18.5567 21.9777 18.8678 19.7978 19.7628 17.8338C20.6577 15.8699 22.0987 14.2048 23.9139 13.0372C25.729 11.8696 27.8417 11.2488 30 11.2488C32.1583 11.2488 34.271 11.8696 36.0861 13.0372C37.9013 14.2048 39.3423 15.8699 40.2372 17.8338C41.1322 19.7978 41.4433 21.9777 41.1335 24.1136C40.8237 26.2495 39.906 28.2512 38.49 29.88C41.2192 30.8582 43.5795 32.6557 45.2482 35.0265C46.9169 37.3974 47.8125 40.2258 47.8125 43.125ZM30 60C37.9565 60 45.5871 56.8393 51.2132 51.2132C56.8393 45.5871 60 37.9565 60 30C60 22.0435 56.8393 14.4129 51.2132 8.7868C45.5871 3.16071 37.9565 0 30 0C22.0435 0 14.4129 3.16071 8.7868 8.7868C3.16071 14.4129 0 22.0435 0 30C0 37.9565 3.16071 45.5871 8.7868 51.2132C14.4129 56.8393 22.0435 60 30 60ZM35.625 22.5C35.625 23.9918 35.0324 25.4226 33.9775 26.4775C32.9226 27.5324 31.4918 28.125 30 28.125C28.5082 28.125 27.0774 27.5324 26.0225 26.4775C24.9676 25.4226 24.375 23.9918 24.375 22.5C24.375 21.0082 24.9676 19.5774 26.0225 18.5225C27.0774 17.4676 28.5082 16.875 30 16.875C31.4918 16.875 32.9226 17.4676 33.9775 18.5225C35.0324 19.5774 35.625 21.0082 35.625 22.5Z" fill="#D27C2C"/>
        </g>
        <defs>
        <clipPath id="clip0_85_281">
        <rect width="60" height="60" fill="white"/>
        </clipPath>
        </defs>
        </svg>
      </div>
      Nessuna</div>
  </div>
  <form action="{{route('diets.store')}}" method="post">
    @csrf
    <select name="diet[]" class="custom-select" multiple>
      @if(in_array('vegetariana', $diete))
      <option value="vegetariana" selected>vegetariana</option>
      @else
      <option value="vegetariana">vegetariana</option>
      @endif
      @if(in_array('vegana', $diete))
      <option value="vegana" selected>vegana</option>
      @else
      <option value="vegana">vegana</option>
      @endif
      @if(in_array('low-carbo', $diete))
      <option value="low-carbo" selected>bassi carboidrati</option>
      @else
      <option value="low-carbo">bassi carboidrati</option>
      @endif
      @if(in_array('nessuna', $diete))
      <option value="nessuna" selected>nessuna</option>
      @else
      <option value="nessuna">nessuna</option>
      @endif
     
    </select>
    <a href="{{route('home')}}">INDIETRO</a>
    <input type="submit" class="confirm-button" value="AVANTI">
  </form>
</div>

<script src="/js/multi-selection.js"></script>
@endsection