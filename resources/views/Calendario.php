<?php echo 'Bienvenido a CALENDARIO';    include 'header.php';?>
<div class="command-bar">
  <div class="navigation">
    <button id="navigateBackButton" aria-label="Presione Entrar para retroceder." title="Retroceder" type="button" disabled>
      <span class="icon back-button"></span>
    </button>
    <div class="divider"></div>
  </div>

  <div class="commands">
    <ul aria-label="Caso Comandos" role="menubar">
      <li>
        <button aria-label="Mostrar como" aria-expanded="false" aria-haspopup="true" role="menuitem" title="Mostrar como" type="button">
          <span>
            <img src="https://content.powerapps.com/resource/uci-infra-web/resources/images/ViewAll2.077f2620056d7c1ac99d4e3500fb4de1.svg" alt="Mostrar como" title="Mostrar como">
            <span>Mostrar como</span>
          </span>
          <span class="chevron-down"></span>
        </button>
      </li>

      <li>
        <button aria-label="Mostrar gráfico" role="menuitem" title="Mostrar gráfico" type="button">
          <span>
            <img src="https://content.powerapps.com/resource/uci-infra-web/resources/images/SentimentScore.079126cc41115540b9a6c27dd73e216e.svg" alt="Mostrar gráfico" title="Mostrar gráfico">
            <span>Mostrar gráfico</span>
          </span>
        </button>
      </li>

      <li>
        <button aria-label="Crear Caso" role="menuitem" title="Crear Caso" type="button">
          <span>
            <img src="https://content.powerapps.com/resource/uci-infra-web/resources/images/Add.e3b9b5bbf4470fff2278314b571d3441.svg" alt="Crear Caso" title="Crear Caso">
            <span>Crear Caso</span>
          </span>
        </button>
      </li>

      <li>
        <button aria-label="Cierre Masivo" role="menuitem" title="Cierre Masivo" type="button">
          <span>
            <img src="https://content.powerapps.com/resource/uci-infra-web/resources/images/ConvertTo.6ae87363aecd8b9d8c018eacb85298f2.svg" alt="Cierre Masivo" title="Cierre Masivo">
            <span>Cierre Masivo</span>
          </span>
        </button>
      </li>

      <li>
        <button aria-label="Más comandos para Caso" aria-expanded="false" aria-haspopup="true" role="menuitem" title="Más comandos para Caso" type="button">
          <span class="icon more-vertical"></span>
        </button>
      </li>
    </ul>
  </div>

  <div class="share-section">
    <button id="collaborationShareButton" aria-label="Compartir" role="button" aria-haspopup="menu" aria-expanded="false" type="button">
      <svg width="1em" height="1em" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.38 5.7V3.59c0-.48.53-.74.89-.47l.06.05 4.5 4.42c.2.2.23.54.05.77l-.05.07-4.5 4.42c-.34.33-.89.12-.95-.34v-2.18l-.26.03a9.25 9.25 0 0 0-5.19 2.5c-.39.35-.99.03-.93-.5.5-4.09 2.59-6.34 6.15-6.63l.23-.01ZM5.5 4A2.5 2.5 0 0 0 3 6.5v8A2.5 2.5 0 0 0 5.5 17h8a2.5 2.5 0 0 0 2.5-2.5v-1a.5.5 0 0 0-1 0v1c0 .83-.67 1.5-1.5 1.5h-8A1.5 1.5 0 0 1 4 14.5v-8C4 5.67 4.67 5 5.5 5h3a.5.5 0 0 0 0-1h-3Z"></path>
      </svg>
      Compartir
      <svg width="1em" height="1em" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.85 7.65c.2.2.2.5 0 .7l-5.46 5.49a.55.55 0 0 1-.78 0L4.15 8.35a.5.5 0 1 1 .7-.7L10 12.8l5.15-5.16c.2-.2.5-.2.7 0Z"></path>
      </svg>
    </button>
  </div>
</div>

<?php include 'footer.php'; ?>

