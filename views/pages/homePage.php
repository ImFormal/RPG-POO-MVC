<h1 class="text-center mb-4">Toutes mes cartes Pokemon</h1>

<div class="d-flex flex-wrap gap-3 justify-content-center">
    <?php foreach($pokemons as $pokemon){
        require 'views/components/card.php';
    }

    ?>
</div>