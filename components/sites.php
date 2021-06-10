<div class="columns is-multiline">
<?php


  // $valet_sites = explode(",", );
  $valet_sites = scandir( $_ENV['VALET_LOCATION'] . "Sites/" );
  $hidden_sites = explode(',', ".,..");
  $valet_sites_ssl = array_diff(scandir($_ENV['VALET_LOCATION'] . "Certificates"), $hidden_sites);

  $valet_prune_sites = array_diff( $valet_sites, $hidden_sites );

  $valet_config = file_get_contents($_ENV['VALET_LOCATION'] . "config.json");
  $valet_config = json_decode($valet_config, true);


  foreach ( $valet_prune_sites as $site ) {
    $host = $site.'.'.$valet_config['tld'];

    $ssl = array_find($site, $valet_sites_ssl);

    if ( $ssl == true ) {
      stream_context_set_default( [
        'ssl' => [
          'verify_peer' => false,
          'verify_peer_name' => false,
        ],
      ]);
      $site_protocol = 'https://';

    } else {
      $site_protocol = 'http://';
    }

    echo '<div class="column is-one-third">';
    echo '<div class="card">';
    echo '<header class="card-header">';
    echo '<p class="card-header-title">'.$site.'</p>';
    echo '<span class="card-header-icon" aria-label="more options">';
    // if ( $ssl === true ) { echo '(HTTPS)&nbsp;'; }
    if ( $ssl === true ) { echo '<span class="lock-icon" aria-label="secure"></span>'; }
    echo '<span class="icon has-text-success"><i class="far fa-thumbs-up" aria-hidden="true"></i></span>';
    echo '</span>';
    echo '</header>';
    echo '<footer class="card-footer">';
    echo '<a href="'.$site_protocol.$host.'" target="_blank" class="card-footer-item has-text-white has-background-info">Visit</a>';
    echo '</footer>';
    echo '</div>';
    echo '</div>';
  }

?>
</div>
