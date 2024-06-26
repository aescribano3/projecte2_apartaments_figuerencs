<?php

/**
 * Example function - Exemple d'estructura d'una funció middleware.
 *
 * @param \Emeset\Request $request
 * @param \Emeset\Response $response
 * @param \Emeset\Container $container
 * @param callable $next
 * @return \Emeset\Response
 */
function isLogged($request, $response, $container, $next){

    // Aquí va el codi del middleware
    $logged = $request->get("SESSION", "logged");

    if(!$logged) {
        $response->redirect("location: /index.php?r=login");
        return $response;
    }

    $response->set("email", $request->get("SESSION", "email"));

    $_SESSION["user-email"] = $request->get("SESSION", "email");

    $response = $next($request, $response, $container);


    return $response;
    
}