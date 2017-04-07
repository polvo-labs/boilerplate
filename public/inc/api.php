<?php

sleep(3);

if (rand(1, 2) === 1) {
  echo json_encode([
    'success' => true,
    'message' => 'Enviado com sucesso!'
  ]);
} else {
  echo json_encode([
    'success' => false,
    'message' => 'Erro ao enviar dados'
  ]);
}
