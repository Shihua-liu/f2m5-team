<div class="login_section">
    <span>
    <?php if(isloggedIn()):?>
        <?php echo getLoggedInUserEmail(); ?>
    <?php endif?>
    </span>
</div>
    
    
    <?php if(isloggedIn()):?>
            
        <a href="<?php echo url( 'logout' ) ?>" class="active"><button>uitloggen</button></a>

    <?php else: ?>
        <a href="<?php echo url( 'aanmeld' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><button>Aanmelden</button></a>
    <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><button>inloggen</button></a>
    <?php endif?>
