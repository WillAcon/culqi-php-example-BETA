<?php

/**
 * Como crear un cargo a una tarjeta usando Culqi PHP.
 */

try {
  // Usando Composer (o puedes incluir las dependencias manualmente)
  require 'vendor/autoload.php';

  // Configurar tu API Key y autenticación
  $SECRET_API_KEY = "[API_KEY]";
  $culqi = new Culqi\Culqi(array('api_key' => $SECRET_API_KEY));

  $pedidoId = time();

  // Creando Cargo a una tarjeta
  $cargo = $culqi->Cargos->create(
      array(
          "address" => "Avenida Lima 1232",
          "address_city" => "LIMA",
          "amount" => 1000,
          "country_code" => "PE",
          "currency_code" => "PEN",
          "cvv" => "123",
          "email" => "wmuro@me.com",
          "first_name" => "William",
          "installments" => 0,
          "last_name" => "Muro",
          "metadata" => "",
          "order_id" => "testorder01",
          "phone_number" => 3333339,
          "product_description" => "Venta de prueba",
          "token" => $_GET['token']
      )
  );
  // Respuesta
  print_r($cargo);

} catch (Exception $e) {
  echo $e->getMessage();
}
