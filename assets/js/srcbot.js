Bots.push({
    "name": "panacarebot",
    "precatch": function(text) {
        return text;
    },
    "actions": [
    {
        "catch": ["*^precio^* *^geriatrica^*"],
        "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 480-520$ por jornada."
    },
    {
        "catch": ["*^precio^* *^pediatrica^*"],
        "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 520-540$ por jornada."
    },
    {
        "catch": ["*^precio^* *auxiliar*"],
        "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 450-520$ por jornada."
    },
    {
        "catch": ["*^precio^* *postcirugia*"],
        "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 480-550$ por jornada."
    },
    {
        "catch": ["*^precio^* *^nacidos^*"],
        "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 450-520$ por jornada."
    },
    {
        "catch": ["*^precio^* *^oncologica^*"],
        "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 500-560$ por jornada."
    },
    {
        "catch": ["*^precio^* *^equipamiento^*"],
        "response": "La renta de equipamiento hospitalario para el cuidado de su paciente varía de acuerdo al modelo\nDiríjase al apartado de servicios en renta de equipamiento hospitalario para visualizar el catálogo completo."
    },
    {
      "catch": ["*^precio^*"],
      "response": [
        {
          "text": "¿De que apartado te interesa conocer los costos?\n-  Enfermería geriátrica\n-  Enfermería pediátrica\n-  Enfermería auxiliar\n-  Atención postcirugía\n-  Cuidado de recién nacidos y mujeres en parto\n-  Enfermería oncológica\n-  Renta de equipamiento hospitalario",
          "actions": [
            {
              "catch": ["*^geriatrica^*"],
              "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 480-520$ por jornada.",
              "from": "{PREVIOUS}"
            },
            {
              "catch": ["*^pediatrica^*"],
              "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 520-540$ por jornada.",
              "from": "{PREVIOUS}"
            },
            {
              "catch": ["*auxiliar*"],
              "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 450-520$ por jornada.",
              "from": "{PREVIOUS}"
            },
            {
              "catch": ["*postcirugia*"],
              "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 480-550$ por jornada.",
              "from": "{PREVIOUS}"
            },
            {
              "catch": ["*^nacidos^*"],
              "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 450-520$ por jornada.",
              "from": "{PREVIOUS}"
            },
            {
              "catch": ["*^oncologica^*"],
              "response": "El costo del servicio se calcula en base a la distancia de traslado\nPuene variar entre 500-560$ por jornada.",
              "from": "{PREVIOUS}"
            },
            {
              "catch": ["*^equipamiento^*"],
              "response": "La renta de equipamiento hospitalario para el cuidado de su paciente varía de acuerdo al modelo\nDiríjase al apartado de servicios en renta de equipamiento hospitalario para visualizar el catálogo completo.",
              "from": "{PREVIOUS}"
            },
            {
              "catch": ["*"],
              "response": "Elección no valida, por favor elige una de las anteriores"
            }
          ]
        }
      ]
    },
    {
        "catch": ["*^hola^*"],
        "response": "¡Hey hola!, me llamo Carely y soy la asistente virtual de PANACARE. Estoy aquí para ayudarte en lo que necesites.\n¿Qué apartado te interesa de nuestrocatálogo?\n-  Servicios\n-  Costos\n-  Renta de equipamiento hospitalario\n-  Bolsa de trabajo"
    },
    {
        "catch": ["*^información^*"],
        "response": "¿De que área buscas información?\n-  Servicios\n-  Costos\n-  Renta de equipamiento hospitalario\n-  Bolsa de trabajo"
    },
    {
        "catch": ["*"],
        "response": "Lo siento no me fue posible entenderte, inténta con:\n-  Servicios\n-  Costos\n-  Renta de equipamiento hospitalario\n-  Bolsa de trabajo"
    }
    //\n-  Enfermería geriátrica\n-  Enfermería pediátrica\n-  Enfermería auxiliar\n-  Atención postcirugía\n-  Cuidado de recién nacidos y mujeres en parto\n-  Enfermería oncológica\n-  Renta de equipamiento hospitalario\n-  Venta de aditamentos\n-  Bolsa de trabajo
],
    "postcatch": function(text) {
        return text;
    },

    "functions": {},
    "synonyms": [
      ["hola", "hello", "que tal", "buenas tardes", "buenas noches"],
      ["informes","informacion"],
      ["servicio","servicios"],
      ["costo","precio","valor","cuesta"],
      ["nacidos","recien nacidos","embarazadas","embarazada","embarazo","nacido"],
      ["equipamiento","hospitalario"],
      ["geriatrica","geriatra"],
      ["pediatrica","pediatra"],
      ["oncologica","oncologa"]
    ],
    "variables": {}
});
