 <section class="py-3">
     <div class="container px-5 d-flex flex-column flex-xl-row justify-content-between align-items-center">
         @foreach ($contentCall as $content)
             <div class="d-flex align-items-center call justify-content-center">
                 <img class="align-self-center me-3 h-50" src="/img/{{ $content['image'] }}" alt="">
                 <span class="text-uppercase">{{ $content['text'] }}</span>
             </div>
         @endforeach
     </div>
 </section>

 <style lang="scss" scoped>
     .call:last-child img {
         width: 70px;
         height: 70px;
     }
 </style>
