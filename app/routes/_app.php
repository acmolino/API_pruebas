<?php

app()->get("/", function () {
    response()->json(["message" => "Congrats!! You're on Leaf API"]);
});

app()->get("/app", function () {
    // app() returns $app
    response()->json(app()->routes());
});

app()->get("/personas", "PersonaControlador@index");
app()->get("/personas/{id}", "PersonaControlador@consultar");

app()->post("/personas", "PersonaControlador@agregar");

app()->delete("/personas/{id}", "PersonaControlador@borrar");

app()->put("/personas/{id}", "PersonaControlador@actualizar");

app()->get("/edad/{edad}", "PersonaControlador@mayoresDe");
