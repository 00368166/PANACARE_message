Bots.push({
    "name": "panacarebot",
    "precatch": function(text) {
        return text;
    },
    "actions": [
    {
        "catch": ["how* *are* *you*"],
        "response": [
            {
                "text": "I'm good thanks! What about you?",
                "actions": [
                    {
                        "catch": ["*good*"],
                        "response": "That's good!",
                        "from": "{PREVIOUS}"
                    },
                    {
                        "catch": ["*ok*"],
                        "response": "Oh, ok.",
                        "from": "{PREVIOUS}"
                    },
                    {
                        "catch": ["*bad*"],
                        "response": "That's too bad.",
                        "from": "{PREVIOUS}"
                    },
                    {
                        "catch": ["*"],
                        "response": "ANSWER ME!",
                        "from": "{PREVIOUS}"
                    }
                ]
            }
        ]
    },
    {
        "catch": ["*hello*"],
        "response": "Hello!"
    },
    {
        "catch": ["*"],
        "response": "repitelo!"
    }
],
    "postcatch": function(text) {
        return text;
    },

    "functions": {},
    "synonyms": [],
    "variables": {}
});
