
    <?php 
    $data=[
  
        'fact'=>"In Hollands embassy in Moscow, Russia, the staff noticed that the two Siamese cats kept meowing and clawing at the walls of the building. Their owners finally investigated, thinking they would find mice. Instead, they discovered microphones hidden by Russian spies. The cats heard the microphones when they turned on.",
        'length'=>"318",
    ];

    header('Content-Type: application/json');
    echo json_encode($data);
    
    ?>
