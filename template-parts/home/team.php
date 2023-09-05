<? 
if(get_field('sekciya_13')['vkl'][0] == 'on'){?>
<section class="team-home">
  <div class="team-home-img">
    <div class="img-cover"> <img src="<? echo get_field('sekciya_13')['izobrazhenie']['url'];?>" alt="">
    </div>
  </div>
  <div class="team-home-description">
    <div class="team-home-container">
      <h2>
        <? echo get_field('sekciya_13')['zagolovok'];?>
      </h2>
      <div class="team-home-text">
        <? echo get_field('sekciya_13')['tekst'];?>
      </div>
    </div>
  </div>
</section>

<?} ?>