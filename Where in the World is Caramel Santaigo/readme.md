When you play the game, the cookie gets set and using [Flask Unsign](https://pypi.org/project/flask-unsign/) you can just get the answers to the game:

```bash
alan@XPS:/SANS$ flask-unsign --decode --cookie '.eJx1Uk1v2zAM_SuELrs4g5M4iZ1b1311wNYi6TYMzQ60RFuaZcmQ5RRZ0f8-Ku1hh_YkiXzke3zig1B4Elvx1bt0yQTZhp9fjGstwY6Pxgf1FP9sXBzF9k7cagJ-Q08uGu9Iweh7iprRgLWfIuwjyg6ujxQa6-8BnYJP3qJr33IrLj9BR0MEqUl2qSpqMgH2DgepMQIOQwJe6wyuwPloJHPEVKZRAab2AX5iGFOw59ygWQZIHOmZ4Kyv9RECobVcRxgZ96RuGhPnOKCkEXg-ME7xKGOq1cjj_ubTT0Fsq0xYLzFNya7s0UV8M8IljtESg_2QMsmTu-RgDIcpz6lCmzHGoULGfFDG1VNoeZa99JFNSHb-MOQcZnAxjTEYZMY7cekHchpbchm8J9dj6Bh54eI9hSGDd2RbM_WvtEwNXpNwE7CdiAN_SWrY0TDV1khOfKN7-OVDl8H3_cW5xY1lU7S3igLnd_6IzlBvMvho3LP0HZ26P3g88yguvZL0pIBdC3zx_Z5Iie18U3KA_aa0My_b8MJwr4r9XxpTHY2MPpxufUfpbx54NUa9PYhqVdOybFS-boqCilW5ydc5LhcN5bKUWC5WdSOxni-butrMV3mVSyw26-UCC8SaVgeR8dKM_P2SrtQWDoKobpo8x9m8XhWzoihxViLms2pTzRe0LuSirg7iUTz-Aw7AFk0.YdF0TA.vR3QS4BrTQeMNDYNrMCmp2ArQJQ'
```

You could also use [CyberChef](https://gchq.github.io/CyberChef/) to base64 decode it using URL safe characters and then Zlib inflate it to [produce](https://gchq.github.io/CyberChef/#recipe=From_Base64('A-Za-z0-9-_',true)Zlib_Inflate(0,0,'Adaptive',false,false)&input=ZUp4MVVrMXYyekFNX1N1RUxyczRnNU00aVoxYjEzMTF3TllpNlRZTXpRNjBSRnVhWmNtUTVSUlowZjgtS3UxaGhfWWtpWHprZTN6aWcxQjRFbHZ4MWJ0MHlRVFpocDlmakdzdHdZNlB4Z2YxRlA5c1hCekY5azdjYWdKLVEwOHVHdTlJd2VoN2lwclJnTFdmSXV3anlnNnVqeFFhNi04Qm5ZSlAzcUpyMzNJckxqOUJSME1FcVVsMnFTcHFNZ0gyRGdlcE1RSU9Rd0plNnd5dXdQbG9KSFBFVktaUkFhYjJBWDVpR0ZPdzU5eWdXUVpJSE9tWjRLeXY5UkVDb2JWY1J4Z1o5NlJ1R2hQbk9LQ2tFWGctTUU3eEtHT3ExY2pqX3ViVFQwRnNxMHhZTHpGTnlhN3MwVVY4TThJbGp0RVNnXzJRTXNtVHUtUmdESWNwejZsQ216SEdvVUxHZkZERzFWTm9lWmE5OUpGTlNIYi1NT1FjWm5BeGpURVlaTVk3Y2VrSGNocGJjaG04SjlkajZCaDU0ZUk5aFNHRGQyUmJNX1d2dEV3TlhwTndFN0NkaUFOX1NXclkwVERWMWtoT2ZLTjctT1ZEbDhIM19jVzV4WTFsVTdTM2lnTG5kXzZJemxCdk12aG8zTFAwSFoyNlAzZzg4eWd1dlpMMHBJQmRDM3p4X1o1SWllMThVM0tBX2FhME15X2I4TUp3cjRyOVh4cFRIWTJNUHB4dWZVZnBieDU0TlVhOVBZaHFWZE95YkZTLWJvcUNpbFc1eWRjNUxoY041YktVV0M1V2RTT3huaS1idXRyTVYzbVZTeXcyNi1VQ0M4U2FWZ2VSOGRLTV9QMlNydFFXRG9Lb2Jwbzh4OW04WGhXem9paHhWaUxtczJwVHpSZTBMdVNpcmc3aVVUei1BdzdBRmsw):

```json
{
	"day": "Monday",
	"elf": "Jingle Ringford",
	"elfHints": [
		"The elf mentioned something about Stack Overflow and Golang.",
		"They kept checking their Snapchat app.",
		"Oh, I noticed they had a Star Wars themed phone case.",
		"The elf got really heated about using spaces for indents.",
		"hard"
	],
	"hour": 9,
	"location": "Santa's Castle",
	"options": [
		[
			"Montr\\u00e9al, Canada",
			"Edinburgh, Scotland",
			"Vienna, Austria"
		],
		[
			"Copenhagen, Denmark",
			"Antwerp, Belgium",
			"Edinburgh, Scotland"
		],
		[
			"Montr\\u00e9al, Canada",
			"Prague, Czech Republic",
			"New York, USA"
		],
		[
			"Placeholder",
			"Rovaniemi, Finland",
			"Reykjav\\u00edk, Iceland"
		]
	],
	"randomSeed": 178,
	"route": [
		"Edinburgh, Scotland",
		"Antwerp, Belgium",
		"Prague, Czech Republic",
		"Placeholder"
	],
	"victoryToken": "{ hash:\"95be38fd06f44e4587060a32fe0c8ca825bfcab13fb9715090ca47632a4aabe5\", resourceId: \"eebff00a-1b54-448a-8aa0-97912e64c2b9\"}"
}
```