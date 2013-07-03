<!DOCTYPE html>
<?php 

$thisPage="exhibitionpage";

$posters = array(
				array(
			name=>"Adam Hadraba ",
			school=>"Czech • Masaryk University, Brno, Czech Republic ",
			desc=>"This as-yet-unnamed set of icons was created as a part of my Bachelor’s thesis on the fictional subway in Brno. The icons resulted from a thorough study of the Avenir typeface and therefore would boost the style greatly in all signage. A full set of 250 icons in both negative and positive execution is coming this fall."
		),
	
				array(
			name=>"Adam Reeves &amp;  Patrick Colgan",
			school=>"British • University of Brighton, UK",
			desc=>"Pavilion typeface was initially inspired by the unusual shapes found found in the grounds of Brighton’s Pavilion Dome. With these shapes in mind we aimed to create a typeface that was legible and sensible but also represented the playful spirit of Brighton. We hope that the end result is a typeface that can be used in multiple situations effectively, but is also visually interesting compared to other sans serif typography."
		),
	
				array(
			name=>"Adrià Gómez",
			school=>"Spanish • EASD Serra i Abella, Barcelona",
			desc=>"Wake is a subtle sans serif. Subtle round corners, subtle increases between weights and a subtle slant angle in the italics. Wake is fresh and new, versatile but with personality. The font works especially well on screen and in digital environments, in addition to this, the open shapes and large x-height keep it legible at small sizes.<br />Wake is a type family of 8 styles: 4 weights plus italics, making it well-suited for a wide range of versatile tasks such as brochures, magazines, posters, websites, headlines or logotypes."
		),
	
				array(
			name=>"Adriana Leites",
			school=>"Portuguese • ESAD Matosinhos, Portugal",
			desc=>"Lira, elegant and delicate. A high contrast, narrow, seriffed, roman typeface with a modern flair, specially designed for headlines and big text sizes due to the thin and carefully refined details. The combination of straight and tall stems with thin serifs and gentle endings of letters like 〈a〉 and 〈r〉 convey a certain sophistication and refinement, making this font ideal for fashion and decoration magazines, as well as luxury contexts."
		),
	
				array(
			name=>"Agata Pietraszko ",
			school=>"Polish • University of Arts, Poznań, Poland",
			desc=>"Arin is a medium contrast serif typeface, drawn with a smooth stroke modulation. <br />It consists of both lowercase and capital letters extended with some OpenType features. <br />All the capital letters were intentionally designed slightly shorter in order to give space for the diacritics, as the typeface was originally created to harmonise with the Polish language."
		),
	
				array(
			name=>"Alberto Carnero ",
			school=>"Spanish • European Design Institute (IED), Madrid, Spain ",
			desc=>"Publia is a wedge roman serif for text and headlines typeface based on the Roman woman. The lines of the characters follow the women’s Roman clothes and their bodies. A modern classic.<br />With strong shapes and generous height, it’s a perfect typeface to use in small sizes and looks nice large as well. Publia is designed to thrive under the adverse conditions, and with very good readability at 6pt."
		),
	
				array(
			name=>"Aleksandra Samuļenkova",
			school=>"Latvian • Royal Academy of Art (KABK), The Hague, Netherlands",
			desc=>"Pilot is a condensed typeface family with a distinctive character and slightly nostalgic flavor. Pilot’s three weights and their corresponding italics provide rich typographical variety for any kind of display use. This family was planned as a condensed design; it is not derived from a regular width."
		),
	
				array(
			name=>"Alessia Mazzarella",
			school=>"Italian • University of Reading, UK ",
			desc=>"My intention is to design a typeface that addresses typographic problems of multi-script settings for Oriya and Latin, bringing variety and dynamism in style to both scripts. Most existing Oriya typefaces adopt a monoline approach whereas this project aims to provide an alternative modulated design for more complex typography. This typeface will provide a variegated range of weights and styles with individual personalities held together by a set of distinctive features. <br />(And there is a balloon donkey.)"
		),
	
				array(
			name=>"Alex Cervera Hidalgo ",
			school=>"Spanish • EINA, Barcelona, Spain ",
			desc=>"Kelm is a text font conceptually inspired by the Golden Type, William Morris’ typeface designed for his Kelmscot Press. Its low contrast with strong terminals, generous x-height and short ascendents and descenders perfectly suit magazine and newspaper design, printed with low quality paper where strong terminals are demanded and space economy is a must. Looking back to refresh the future."
		),
	
				array(
			name=>"Alfonso Federico García",
			school=>"Argentinian • University of Buenos Aires",
			desc=>"Faustina is a font designed for newspaper print, having in mind the necessity for space saving that it is needed in printing media. <br />It has ruggedly constructed characters for low quality print. The large x-height, semi-condensed proportions, plus open counters are characteristics that make Faustina a font that works naturally in small sizes, without losing its grace. Best set at 8 to 10 points.<br />This font is intended to be a choice to set news in Spanish, following my observation that most Latin newspapers use north American or European fonts. <br />Currently only the regular variant is finished."
		),
	
				array(
			name=>"Alissa Fulton",
			school=>"German • Central Saint Martins, London, UK",
			desc=>"This stencil typeface was originally created as a physical stencil cut out of oiled manila and then later digitised. I wanted to keep the essence of its original physical form as well as I could. The typeface works in a larger format so its stencil-like details can be appreciated, but also in a body copy where it creates a nice reading texture. "
		),
	
				array(
			name=>"Ana Dorado ",
			school=>"Argentinian • EINA, Barcelona, Spain ",
			desc=>"Wisna was originally designed for Nordic mythology books, and inspired by Celtic scripts. Named after a woman warrior, it is feminine but strong: it resists hard conditions. It offers optimum legibility even in small sizes, and can be printed with high pressure methods (such as letterpress), due to its medium contrast and strong serifs. It looks its best with plenty of white space around it. <br />Details of this typeface include a complementary uppercase alphabet; alternative lowercase “a”, and “g”, and a big set of ornaments. "
		),
	
				array(
			name=>"Ángel Araujo Vicente",
			school=>"Spanish • Guadalajara Art School, Spain",
			desc=>"At age 23, �ngel Vicente Araujo is a digital artist from Spain. A recent graduate of the Academy of Art school in Guadalajara (Spain), Ángel is also a visual designer, branding and digital artist. Ángel loves new technology and is always curious and attentive to new trends. This allows him to develop projects consistent with the new media, not to mention the classic and traditional. Ángel brings a lot of energy and positivity."
		),
	
				array(
			name=>"Anna Czuz",
			school=>"Polish • University of Arts, Poznań, Poland",
			desc=>"Tramal is a blackletter, display typeface with high contrast and a tight letter spacing designed to be used in headlines and short texts. It is a modern interpretation of a late medieval manuscript lettering combined with graphics used in traditional printmaking (mainly woodcut and linocut). The use of the broad nib as well as the quill were a foundation of the letterforms’ design. Tramal typeface also includes graphic solutions from the other kinds of broken script, mainly fraktur and kurrentschrift."
		),
	
				array(
			name=>"Annelies Devriese ",
			school=>"Belgian • St Lucas School of Science and Arts, Ghent, Belgium ",
			desc=>"Lulu is a font based upon various grids which have been configured to create one regular, one bold and two italics. The two italics enable identification of a quote within a spoken text or you can choose the preferred italic. The fonts are monospaced and are interchangeable."
		),
	
				array(
			name=>"Anton Drachuk",
			school=>"Belarusian/Polish • University of Arts, Poznań, Poland",
			desc=>"This is my BA diploma font called Bertau. It is a font inspired by the typeface used in Bernh. Tauchntiz Jun. publishers’ books in English and German languages in the mid-19th century. <br />I am trying to reinterpret this fine typeface into a digital version; thus preserving some original details, ligatures, oldstyle numbers and shapes originally designed to work in English and German (and expanding the number of glyphs for multi-lingual usage), imitating the effect of letters being printed as they were in the 19th century by making slight irregularities in the proportions and widths. Let me know what you think about it!<br />The work is still in progress: Italics, Caps, Sans Serif, Slab Serif will be added to the font family as soon as I make them."
		),
	
				array(
			name=>"Anton Studer",
			school=>"Swiss • Zurich University of the Arts, Switzerland",
			desc=>"Cross-media projects are becoming more and more important now that visual communication is not limited to paper and print anymore; rather a wide mixture of medias is used to communicate. As many different media are used to communicate with the customer, typefaces have to work well in many different situations. <br />Medien is designed to be used on almost all media. Its basic structure fits well to the grid made by pixels but when used in printed matter you’ll not notice that fact. The Medien font family was created during the diploma work of the first MAS in Type design at the University of the Arts in Zurich by Anton Studer."
		),
	
				array(
			name=>"Ariadna Botellé Miró",
			school=>"Andorran • Bau Design College, Barcelona, Spain",
			desc=>"This typeface consists of representing a series of pictograms based on a popular fairytale. The interest of my work needed a design that works especially the modulation of the line and the shape, that is the explanation of the difference between certain zones of the typography.<br />From another perspective, there’s the stroke discontinuity. The explanation of this second point is as simple as my opinion: less is more.<br />Last but not least, the square as a letter format is the only obligation that was given to us in the design assignment."
		),
	
				array(
			name=>"Azza Alameddine",
			school=>"Lebanese • University of Reading, UK",
			desc=>"Sila is is the link between aesthetics and function, character and discretion, pixel and high definition, versatility and purpose, bold and thin, left and right.<br />It was designed as a web font for Latin and Arabic languages as part of the Type Design Masters program at the University of Reading."
		),
	
				array(
			name=>"Bea Canut ",
			school=>"Spanish • European Design Institute (IED), Madrid, Spain ",
			desc=>"Lucas Sans is a humanist, sans serif typeface, best used for short texts or headers. Due to its slightly condensed shapes and the balance between the edgy angles and curves, it gives an elegant and distinctive appearance to all texts.<br />Having completed the regular weight for the Specialization Course in Typography (IED Madrid), it’s being improved to achieve a full family and be part of the digital foundry Comando Cran.<br />Bea Canut is a graphic designer and typographer based in Madrid. Having cofounded the design practice PLAN B WORKS, she’s a member of the multidisciplinary typography platform Comando Cran. "
		),
	
				array(
			name=>"Ben Mitchell",
			school=>"British • University of Reading, UK",
			desc=>" Lumen, the lightbringer, is a typeface for intercultural dialogue as Burma emerges cautiously from decades of isolation. The family includes multiple styles in Latin, Thai, Burmese and Greek (not shown), designed around the needs of complex, hierarchical typesetting. <br />Lumen has a range of OpenType features for the discerning typographer, plus plenty of useful symbols including IPA characters."
		),
	
				array(
			name=>"Bernardo Margulis",
			school=>"Venezuelan • The Cooper Union, New York, USA",
			desc=>"For my original typeface I partnered with Acapulco70 to create a custom typeface to brand the blog and books. After some research, we decided to do a fun and playful, yet very readable display face with nods to broad-pen strokes, but a very contemporary look."
		),
	
				array(
			name=>"Carlos de Toro Hernando",
			school=>"Spanish • EINA, Barcelona, Spain",
			desc=>"Born is a humanistic typeface based on traditional calligraphic forms, but with some new features in its endings, strokes and drops, that provide a more open, fresh and actual look. It also has a big x-height, so it offers high legibility even at small sizes. <br />Born typeface, born in Barcelona city in early 2013, bears the name of one of the most picturesque districts of Barcelona, on the shores of the Mediterranean. It mixes together the old and the traditional, and also the multicultural stuff and new trends, blending these in its narrow and winding streets, creating a symbiosis between tradition and modernity. This is a Mediterranean type that is open to new times. "
		),
	
				array(
			name=>"Carlota Novo Gonzalvo ",
			school=>"Spanish • Aula D Design School, Vigo, Spain",
			desc=>"Contemporary geometric sans serif design that was inspired by British model Twiggy. The reason why this font was named after the model was because of her thin legs.<br />This font has a thin weight, it is condensed and it has a large x-height. <br />Since the stroke of this font is so small, it can only really be used in large sizes and mainly as heading work on posters, flyers and packaging. However, as a thin font, it offers that classy, elegant but also fun and happy feel to a design. This font is not made to be used for body copy."
		),
	
				array(
			name=>"Catalina Brenes Robleto",
			school=>"Costa Rican • EINA, Barcelona, Spain",
			desc=>"Schiele is a book typeface with a contemporary approach, inspired by the Austrian Expressionist art movement.<br />Its intensity creates an organic and vibrant texture through angular contours and sharp forms. The result reflects the essence and drive of Expressionism. It is a modern design with a strong personality whether you read it small or at larger sizes."
		),
	
				array(
			name=>"Chorong Kim",
			school=>"South korean • ESAD Amiens, France",
			desc=>"Phynong is a typeface family of bilingual Latin-Thai characters for use in multilingual publishing. It enables texts to be set in Thai and most Latin scripts.<br />By limiting the contrast in its design, each script retains its own personality while sharing several characteristics with the other. Especially, it offers a real Thai italic instead of a slanted upright. Currently there are two versions (roman, italic) but the other weights will be accomplished soon.<br />Phynong is modern without being neutral, fun while remaining robust. It can be adapted to the layout design of language learning books, or for multilingual magazines."
		),
	
				array(
			name=>"Christine Gertsch ",
			school=>"Swiss • Royal Academy of Art (KABK), The Hague, Netherlands ",
			desc=>"Allonghata is a lively type family especially designed for setting playful texts such as poems, songs, magazine covers, or greeting cards. Two styles with different personalities may be combined: a more formal, yet flourishing version for reading sizes and a playful happy script version for headings. Lots of ligatures and alternates embellish the display version. In continuous text, three different ascender and descender lengths create a visual melody."
		),
	
				array(
			name=>"Claudia Rivera",
			school=>"Mexican • EINA, Barcelona, Spain",
			desc=>"Verita is a typeface designed for non-fiction books. The regular version has large, wide counters. The type creates a comfortable reading rhythm, and besides the specialized dimensions, works in different long text bodies. The x-height is large, making it possible to read at small point sizes. On the other hand, the letter apertures are wide giving it a dynamic and modern touch."
		),
	
				array(
			name=>"Daniel Megías Senso",
			school=>"Spanish • EINA, Barcelona, Spain",
			desc=>"Helio typeface was designed for text reading in popular science books. The design is wide with generous internal spaces. It has a large x-height and the ascenders are higher than uppercase, which gives the level of readability needed to address complex issues like scientifics. For this reason, the design of the numerals and mathematical characters also has essential importance. Helio has a square appearance, a symmetrical axis and slab serifs that give a modern and rational character."
		),
	
				array(
			name=>"Daniel Perraudin",
			school=>"German • Royal Academy of Art (KABK), The Hague, Netherlands",
			desc=>"Dato is a type family with two Italics for Serif &amp; Sans. It is designed to work best in corporate design, brand communication and editorial.<br />Having more than one Italic (in either Serif or Sans) is quite a new concept in type design; having two Italics across a typefamily however is unpreceded. The Roman — as well as the “normal” Italic A — are timeless, neutral and subtly elegant, whereas the upright Italic B can be used for a more expressive flavor. Both Italic A and Italic B, go well with the corresponding Roman. Every style amongst the six styles per weight is clearly recognizable as part of the same family; for example, all three styles of Dato Serif share the same construction with their Sans counterpart, as well as metrics."
		),
	
				array(
			name=>"Dave Foster",
			school=>"Australian • Royal Academy of Art (KABK), The Hague, Netherlands",
			desc=>"Blanco is intended to be a high-quality and legible, classic typeface without the dusty feeling many serifs often have. It is designed to perform well in small sizes for extended reading in print. Aesthetically its sturdiness is influenced by typefaces like Plantin, Caslon and Fleischmann. <br />Blanco was created as the final graduation project for the Type and Media masters in Den Haag at the Royal Academy of Art."
		),
	
				array(
			name=>"David Ucles Belda",
			school=>"Spanish • Escola d’Art i Superior de Disseny (EASD) Alcoi, Alicante, Spain",
			desc=>"My typeface, “datube”, is a modular display design. Its name comes from the first two letters of my name and pipe. It is a modular typeface consisting of three modules: the line, the straight corner and the round corner. <br />Its main features are that all the corners are rounded except the upper right. This feature is reversed in the letter “o”, in order to differentiate the “o” with the “d” for readability. Because of this, some letters have a small serif on the top corner.<br />Another characteristic is that the x-height is small. The lowercase letters have followed the same pattern as above. Finally this typeface is meant for small holders or some text."
		),
	
				array(
			name=>"Dot Georgoulas",
			school=>"Australian • University of Reading, UK",
			desc=>"Nari is a youthful serif typeface family in Latin and Gujarati. It is a contemporary design to be utilised in exhibition literature and publications specific to the needs of multi-script textsetting. <br />The design was developed during the Master of Arts in Typeface design 2011 – 2012."
		),
	
				array(
			name=>"Eduard Inglés Ruiz ",
			school=>"Spanish • EINA, Barcelona, Spain ",
			desc=>"The aim of the project was to design a typeface for novels. Focusing on the sci-fi literary genre, the challenge was to achieve the creation of a typeface that performs well in the design of sci-fi books where big possibilities, spaces and different characters can meet at the same period of time. Saifai is a humanistic typeface combining two worlds: organic and linear. A mixture of both forms creates a big contrast fulfilling a nimble and dynamic reading rythym."
		),
	
				array(
			name=>"Elena Papassissa ",
			school=>"Italian • University of Reading, UK ",
			desc=>"Dr jekyll &amp; miss Hyde is a multi-script typeface family in Armenian, Greek, Cyrillic and Latin for magazines and children’s books. <br />It was designed to work in text and in headings at display sizes. Its forms are funky and strong in personality when used large, elegant and dynamic when set in text."
		),
	
				array(
			name=>"Emil Kozole",
			school=>"Slovenian • Academy of Fine Arts &amp; Design, University of Ljubljana, Slovenia",
			desc=>"Typometry is a display typeface inspired by geometrical forms with a modern feel. It is a hybrid between old and new, earth and space, retro and contemporary, real and unreal. Same letters are made with different patterns and fills and can be combined to create headlines, posters or illustrations."
		),
	
				array(
			name=>"Erin Fitzsimmons",
			school=>"American • The Cooper Union, New York, USA",
			desc=>"Spright is a lively typeface in the tradition of fairytales and fables. As a children’s book designer, I recognized the need for a typeface that evokes the timeless magic and whimsy of classic storytelling, without being informal or childish.<br />It features a tall x-height for maximum readability by nightlight or flashlight under the covers, uniquely animated serifs to bring any story to life, and a spirited Italic to compliment the Book. <br />Spright was selected to appear in the Communication Arts Typography Annual 3 (January/February 2013)."
		),
	
				array(
			name=>"Florian Runge",
			school=>"German • University of Reading, UK",
			desc=>"The nomad typeface tribe consists of ,a range of versatile styles and weights, balancing identity and efficiency to cover themes of both formal and informal content. It is a true hyperpolyglot, writing numerous languages in multiple scripts. <br />While its natural habitat is at the crossroads of referential and literary work, by nature a Nomad’s home is flexible. It enjoys discovering the unknown and adapts to new situations with great ease."
		),
	
				array(
			name=>"Francisca Garrido Ferrer ",
			school=>"Chilean • University of Buenos Aires, ArgeNtina",
			desc=>"Victoria script was born from my interest in starting with a handmade lettering language and interpreting it formally into a digital typeface.<br />Inspired by Mauricio Amster’s lettering work, Victoria is a high-contrast display typeface loaded with expressiveness, to be used in medium and short length texts.<br />Victoria Script is a typographic project developed under completion of my Specialisation in Typography Design at the University of Buenos Aires, Argentina, in the years 2011 and 2012."
		),
	
				array(
			name=>"Giuseppe de Cesare",
			school=>"Italian • European Design Institute (IED), Madrid, Spain",
			desc=>"Zarina is a sans serif typeface with calligraphic features, big white spaces and outstanding contrast between curve and line designed for small text."
		),
	
				array(
			name=>"Group Project",
			school=>"École Superieure d’Art de Lorraine, Metz, france",
			desc=>"Messine is an ongoing custom type design project at Lorraine School of Fine Arts in Metz, France. The Messine type family has been designed by students with guest type designer Alejandro Lo Celso, PampaType, Argentina, and Jérôme Knebusch, teacher at the school. <br />The typefaces are designed for specific sizes and uses. Messine Titrage is intended for titles at large sizes, Messine Quotidienne for daily text exchanges. ¶ The next workshop is planned for February 2014 with further extensions, like a sans serif versions for signage. ¶ Messine Titrage has recently received an honorable mention in the titling category of the Fine Press Book Association student type design contest."
		),
	
				array(
			name=>"Hannah Blows",
			school=>"English • University of Brighton, UK",
			desc=>"I have created a display typeface developed from an exploration of forms and textures found on the Brighton Undercliff Walk. The shapes of the giant concrete sea defences struck me as very typographic forms. This type was originally developed to work as 3D objects. The different textures found along the path were contrasted by the vast expanse of sea, and helped liven this 2D rendering."
		),
	
				array(
			name=>"Héctor Ramírez ",
			school=>"Mexican • Metropolitan Autonomous University, Mexico City ",
			desc=>"Fuencarral is my first typographic project. A humanistic sans serif that combines sharp lines, little contrast and high legibility. It was developed in Madrid, Spain, in 2013, and has regular and italic variants, and small caps. It includes the basic diacritics and special glyphs, such as 〈ð, æ, œ, þ, ß, ø〉 which allow it to be used in several languages. Compared to Fuencarral Regular, its italic variant has a certain calligraphic spirit with radically-form-changing glyphs 〈a, g, ß, &amp;〉, and some ligatures. Fuencarral Regular and Italic are the beginning of a project aiming to develop a typographic family with different visual weights. "
		),
	
				array(
			name=>"Hrvoje Živčić",
			school=>"Croatian • Royal Academy of Art (KABK), The Hague, Netherlands",
			desc=>"Mote is a utilitarian sans-serif typeface mainly for reading sizes in print, influenced by neutral gothic and grotesk designs. It is designed to work as an independent type family but also as the companion to Blanco, a serif typeface by Dave Foster. The two are connected by their proportions, text-fit and shared tastes between both designers. Their optical size, range of weights and darkness are intended to match. The project was about finding a balance between harmonising two separate designs into a useful combination while maintaining their unique characteristics. They have different influences, contrast and tone of voice to set them apart."
		),
	
				array(
			name=>"Hyunho Choi",
			school=>"South Korean • Central St Martins, London, UK",
			desc=>"Hi&amp;ho (AKA Hi’n’Ho) typeface was designed during the TSI (Typography Special Interest group) stencil workshop with Phil Baines, and was later digitized. The idea of the original stencil version was simply to combine an italic with a super condensed width. The name came from Phil’s (incorrect!) way of pronouncing my name — Hyunho. "
		),
	
				array(
			name=>"Igor Labudovic ",
			school=>"Austrian • University of Reading, UK ",
			desc=>"Salom is a type family for complex, yet lively typography, supporting Arabic, Hebrew and Latin. The main purpose of this typeface is to balance all three scripts in equal harmony, keeping in mind their individual cultural heritage.<br />Salom is designed to bridge challenging typography with the outspoken voice of the streets."
		),
	
				array(
			name=>"Imelda Vargas Roque",
			school=>"Mexican • Centro de Estudios Gestalt, Veracruz, México",
			desc=>"Traviesa bell is inspired by humanist calligraphy drawn with the double pencil. It has modulated strokes and a humanistic axis varying only in the axis of the e. Large opening with variables in a, c, e. Used for composition in a book of poems written only for women, hence the name emanates from the letter Traviesa Bell ’93 by Jewish-American poet of the twentieth century Marvin Bell. And the name of Traviesa, for its contrasting strokes both in proportion and in balance."
		),
	
				array(
			name=>"Isabel Urbina",
			school=>"Venezuelan • The Cooper Union, New York, USA",
			desc=>"Galea is a slightly condensed serif typeface with long extenders. Its elongated proportions and graceful terminals seek to bring femininity and elegance to any layout. It is a display face that works well at large sizes in editorial contexts as a headline, titling or introduction to a text.<br />Galea was awarded an honorable mention by the Fine Press Book Association (FPBA) in April 2013. The typeface is also featured in the book “Playing with Type: 50 Experiments” by Rockport Press."
		),
	
				array(
			name=>"Jana Ludvíková ",
			school=>"Czech • Masaryk University, Brno, Czech Republic ",
			desc=>"My font, Lavende, was created to gain credits in the Fonts, Calligraphy and Type III module. It is a reflection of the calligraphy of the French region Provence, because I love this area: I love its culture, cuisine and nature. As a model I used a lot of signs and inscriptions from there. I also added an ancient texture to give a more interesting appearance. Its practical application will be in my own little shop with lavender products."
		),
	
				array(
			name=>"Joan Martí Gargallo",
			school=>"Spanish • Salesians de Sarrià, Barcelona, Spain",
			desc=>"The uppercase typeface was created at the end of 2012, part of a project to create a corporate brand by the Salesians Graphic Arts School of Sarrià in Barcelona, Spain. As this was my first experimental contact with the typeface universe, I created a modern font, with strong personality, built with vigorous bar and thickness, oriented towards headline text. Thanks to this project, I discovered the importance of little details in each character forming a font set."
		),
	
				array(
			name=>"Joanna Angulska ",
			school=>"Polish • University of Arts, Poznań, Poland ",
			desc=>"Tonopah is a new display typeface designed for use in large sizes. The main inspiration for this playful font derives from the form of a coffee stirrer. It is quite wide on the top of the letter and narrow at the bottom. You can use it in posters, headlines and other short runs of texts."
		),
	
				array(
			name=>"Jose Antonio Garrido Izquierdo",
			school=>"Spanish • Escuela Superior de Diseño de Aragón, Zaragoza, Spain",
			desc=>"Avanth was born from the search for a display type to use in big titles with a real personality, but trying to keep it legible in big sizes.<br />Its personality is based on the small details of each letter (unique in each one of them) using simple geometric shapes.<br />Its uppercase features letters with three different styles (Light, Blank and Regular)."
		),
	
				array(
			name=>"José María Román Gálvez ",
			school=>"Spanish • European Design Institute (IED), Madrid, Spain ",
			desc=>"Escreen is a functional sans-serif family that displays legibility regardless of density. To reach this, we look at reference typefaces for screen such as Verdana, Lucida Grande or Phaedra.<br />The result is a large x-height (ensuring that at low resolutions the forms are recognizable), open forms to improve readability, and simplification of geometric shapes to enhance its adaptation to hinting.<br />This typeface is influenced by calligraphic techniques and has humanist features, endowing it with modulation and personality."
		),
	
				array(
			name=>"Josse Pickard",
			school=>"British • Central St Martins, London, UK",
			desc=>"This family was formed from my love of calligraphy and thus is quite true to the stroke of the pen. The aim was to explore legibility and readability and the difference between the two.<br />Pickard attempts to address readability by using its form to create a flow within the text, and its sans serif counterpart, through following guidelines of ‘a new standard of legibility’ by the German Institute for Standardisation, attempts to address legibility. Essentially the serif is a book face and the sans serif is intended for signage."
		),
	
				array(
			name=>"Juan Antonio Crespo <br />Ramos",
			school=>"Spanish • ESAD Matosinhos, Portugal",
			desc=>"Hi my name is Juan Antonio Crespo Ramos, I’m from Madrid (Spain) and I’m 23 years old.<br />I’m almost a Graphic Designer. I love type and illustration. I made this font while I was on Erasmus in Porto, Portugal. And I named it “Moimenta” because when I was finishing it I was travelling around Portugal and I just finished it in “Moimenta Da Beira”, which is a friend’s hometown. <br />So I wanted to dedicate it to that city where I felt like home when I was there thanks to my friend João.<br />I hope you like it!"
		),
	
				array(
			name=>"Juan José Rivas del Rio",
			school=>"Spanish • Estacion Diseño, Granada, Spain",
			desc=>"Lousiane typeface was inspired by Art Nouveau labelling typefaces. The signage was created to easily create beautiful compositions so that any designer can use it. Inspired by the internet, the font is available as a free download, a gift for you, designer friends, enjoy it. "
		),
	
				array(
			name=>"Julia Hanft",
			school=>"German • Zurich University of the Arts, Switzerland ",
			desc=>"Louisa is a monospaced font designed and optimised specifically for on-screen use. Even in small sizes the legibility is very good. The character of the font is a combination of strong, straight elements and warm, friendly forms. Louisa — made during the MAS in Type Design at the Zurich University of the Arts — is available in: Regular, Italic, Bold and Bold Italic."
		),
	
				array(
			name=>"Julia Lewandowska ",
			school=>"Polish • University of Arts, Poznań, Poland",
			desc=>"Bydgoszcz is a family of sans serif typefaces created under the supervision of Professor Krzysztof Kochnowicz at the University of Arts in Poznań, Poland in 2012 – 2013. <br />It is a part of Masters diploma project which is a proposition of the new brand identity of the city of Bydgoszcz."
		),
	
				array(
			name=>"Julie Janet Chauffier",
			school=>"French • University of Reading, UK",
			desc=>"Angata is an attempt to square the circle, or rather to semi-serif the sans. Its shapes are stretched over a conceptual frame: semi-serifs, large x-height, open squarish counters, proportional letters, sharp stroke modulation. To counter-balance the semi-serifs, its axis is somewhat off-kilter, keeping the reader alert.<br />Thanks to its lack of true vertical and horizontal lines, Angata has a rough look, somewhere between handmade and homemade. Like a good linen suit, it’s guaranteed to wrinkle and look jagged on screen. Its designed negative space mobilises letters into collective action, creating a typographic marching tune. "
		),
	
				array(
			name=>"Junyu Deng",
			school=>"Chinese • École de Communication Visuelle (ECV), Paris, France",
			desc=>"Didime is a revival project based on the font Bodoni. It was chosen from the book “Une Famille” published by Édition Didier, 1853, in Paris. This project aims to digitise and redesign this vintage printing type. <br />In order to get an ornamental and expressive look, this new design has deepened the contrast between thick and thin strokes, characterised by horizontal stress, recreated the angled serifs with semicircles. This font has developed from regular into italic, light and bold."
		),
	
				array(
			name=>"Kalapi  Gajjar-Bordawekar ",
			school=>"Indian • University of Reading, UK ",
			desc=>"Mila is an experimental type system consisting of weights and styles designed specifically for use in school textbooks."
		),
	
				array(
			name=>"Kamil Kamysz ",
			school=>"Polish • Academy of Fine Arts, Katowice, Poland ",
			desc=>"Hoptype is a screen font, designed for iPad applications for children. Design factors were: low screen resolution, change of orientation of text by rotating the device and high legibility on a coloured background. <br />The design was based on Sue Walker’s research (2005) at Reading University. Inspired by onomatopoeias in comic books, I used an OpenType algorithm that makes the letters hop, which further enhances the reading experience through play by linking sound and text.<br />Result: a typeface with ascenders higher than descenders. This makes the application designer use a higher leading value. Hoptype has wide serifs, supporting the reading process. The slant of the special glyphs adds a dynamic element to the text."
		),
	
				array(
			name=>"Karen Parry",
			school=>"Australian • The Cooper Union, New York, USA",
			desc=>"Industrial strength, bold &amp; powerful. Excellent fit at larger sizes. Saison Display (named after a French style of beer making) is a revival of a Miller &amp; Ri chard typeface called Sans Serif № 7. It has been extensively revised for contemporary use. The larger-than-normal selection of ligatures gives added versatility.<br />Saison is specially suited for book covers, posters, magazines, initial caps, CD covers — everything display!<br />In future the family will include a range of text weights, perfect companions for Saison Display."
		),
	
				array(
			name=>"Karina Goto Ida",
			school=>"Brazilian • EINA Barcelona, Spain",
			desc=>"Made as a final project for classes of letterform architecture given by Iñigo Jerez, Josema Urós and Laura Meseguer in Eina — University Center of Design and Art, UAB, Barcelona. <br />A typeface designed for women’s magazines about fashion, beauty, music and trends, Makeup is made for use in body text and supporting elements. <br />The first case in which content about fashion appeared in a magazine was in 1672. Based on this historical period, the creation of Makeup has characteristics of a Baroque typeface. Makeup is not just a reinterpretation of Baroque, it’s a current typeface with the humanist features of a handwritten brush."
		),
	
				array(
			name=>"Koen Douma",
			school=>"Dutch • Plantin Institute of Typography, Antwerp, Belgium",
			desc=>"Koen douma (b. 1989) discovered at an early age that he had a special interest in type and writing. As he grew up in the Netherlands, he sought refuge in the rich typographic culture which was available. But the typographical knowledge he developed was mainly intellectual. <br />With the ambition to become acquainted with a more practice-oriented aspect of type design, he developed his typeface Regter during the Expert Class Type Design at the Plantin Institute for Typography (2012 – 2013, Antwerp) under the supervision of Frank E. Blokland."
		),
	
				array(
			name=>"Kristina Stoyanova",
			school=>"Bulgarian • EINA, Barcelona, Spain",
			desc=>"Hello! my name is Kristina Stoyanova and I am currently studying a MA in Advanced Typography. I am very glad to present you my first typography project! <br />Johann is a serif typeface for text inspired by the Baroque Letter with special attention to the work of the German punchcutter and typefounder Johann Fleischmann. The architecture of the font is basically Baroque but its terminals are robust and reminiscent of a modern typeface. The uppercase is based on Roman models and represents more contrast than the lowercase where we have more elegant and vivid forms.<br />The idea of the font is to be used as a text font for a typographic magazine. I hope you like it!"
		),
	
				array(
			name=>"Laura Martín Perea",
			school=>"Spanish • EINA, Barcelona, Spain",
			desc=>"Through the development of the in-depth study “Unit of Time in Monospace”, the conclusions lead to the need for a new and more precise font for current screenwriting in the modern film industry. It’s an accurate approach to the real functions of monospace in timing and sequential technologies in scripts, making it a uniquely advantageous font. Scenario is aimed to be a detailed update of a post neo pica. Simple geometric forms with wider outer and inner forms boost readability and legibility for selective reading and top aesthetics for display in headlines or specific quotes in screenplays."
		),
	
				array(
			name=>"Léna Le Pommelet",
			school=>"French • École Estienne, Paris",
			desc=>"The year 2012 was the 300th birth anniversary of Pierre-Simon Fournier Le Jeune, the punch-cutter, type-founder and printer.<br />In History class we studied how typefaces evolved from the garaldes to the transitionals. In Calligraphy class, we practised on Fournier’s typefaces, they are notable because they didn’t always follow the calligraphic stroke of the pen. And finally, in Typeface Design class, we worked on a revival of a font from Fournier’s specimen. <br />I chose the Palestine, a body, maybe invented by Fournier, which is equivalent to 24 points (two-line Pica or Double Pica). The drawing I made is based on three specimens found in the Encyclopédie (1751), in the Manuel of Typography (1742) and in a 1764 specimen of Fournier’s typefaces."
		),
	
				array(
			name=>"Liron Lavi Turkenich ",
			school=>"Israeli • University of Reading, UK ",
			desc=>"Makeda is a new type family designed in three scripts which bring together different worlds. Hebrew, Amharic (Ethiopic) and Latin are harmonised with each other, while maintaining loyalty to the unique structure of each script. <br />The story of Makeda, the Ethiopian Queen (also known as the Queen of Sheba) is a story of a powerful and mysterious woman, traveling to meet King Solomon in a history-changing act. The typeface is intended for multi-script use, suitable as a text typeface with a generous x-height and large counters. "
		),
	
				array(
			name=>"Lisa Huang",
			school=>"French • École de Communication Visuelle (ECV), Paris, France",
			desc=>"Messaline is a revival reinterpreted from a 1920’s book. It is named after the main character of the story, a Roman empress known for her nymphomania, reflecting the decadence of the period of Antique Rome. The structure of the glyphs remains, but some details like rounded angle serifs give the text a smooth and classical feeling. "
		),
	
				array(
			name=>"Lisa Schultz",
			school=>"Austrian • University of Reading, UK ",
			desc=>"Martha loves to be big and cheeky and at the same time she performs great in text sizes. The typeface was designed for complex hierarchies in popular science magazines and books. Friendly and playful to engage the reader’s interest — robust, clear and reliable to get even the most difficult content across. Martha comes in thin, light, regular, italic and bold for Latin, Greek and Cyrillic."
		),
	
				array(
			name=>"Maciej Majchrzak ",
			school=>"Polish • University of Arts, Poznań, Poland ",
			desc=>"A typeface designed for use in dictionaries, magazines, phone books or annual reports. The forms of letters are simple and clear. They have a pleasant and contemporary look with interesting asymmetrical serifs and distinctive and atypical semi-serifs. A relatively large aperture and x-height improve readability and legibility of the typeface at small sizes which is desirable when using in dictionaries."
		),
	
				array(
			name=>"Marcelo Suazo Vidal",
			school=>"Chilean • University of Chile, Santiago, Chile",
			desc=>"Renzo is a continuous text typeface created to be used mainly in short paragraph documents such as magazines, journals, gazettes and notes. Inspired by LuKas’s vision of Valparaiso’s daily nature and its people, Renzo was born to exhibit his rising and descending shapes, rounded and generous style, with wide serifs and great separation between its strokes. <br />To let this good-looking townie show its beauty it’s advisable to use it at 10 pt or larger. Renzo is meant to be used in many different environments to enjoy its beauty. Renzo works well on paper, allowing an attractive reading experience and excellent legibility. "
		),
	
				array(
			name=>"Maria Calbo Antolino ",
			school=>"Spanish • Salesians de Sarrià, Barcelona, Spain ",
			desc=>"Hello! i’ve created this new typeface for a class project in design and publishing. My objective was to create a font that would facilitate the readability of the text and so I decided to use a large x-height. I think I got it.<br />In the poster we can see the font Aiguamar in the Regular weight. Also available in Light."
		),
	
				array(
			name=>"Maria Soledad Degl’innocenti ",
			school=>"Argentinian • EINA, Barcelona, Spain ",
			desc=>"Archigram is a dynamic and rational text face embracing Latin, Greek and Cyrillic, created in 2013 by the Argentinian graphic designer Soledad Degl’innocenti.<br />It reflects the geometrical aspects of construction as it was designed for architecture manuals (nevertheless, its considerable legibility makes it also suitable to be used in many other ways).<br />It is distinguished by rhythmic foot serifs, thick strokes, straight terminals, a vertical axis, large eyes, low contrast and a tiny aperture.<br />It proves that a face does not need to be sans serif to be contemporary."
		),
	
				array(
			name=>"Mariangela Di Pinto ",
			school=>"Italian • isia Urbino, Italy",
			desc=>"The purpose of benevento font is to be a tribute to the Beneventan Script, one of the finest calligraphies from the Middle Ages, born under the Longobard Dukedom of Benevento, which is my hometown. The choice was to combine extremely simple forms with a quite complex system of ligatures. The result is a very easy-reading character, which can be usefully employed as a book-face and also for creative applications.<br />Ligatures and Stylistic Alternates give at every turn a different appearance to the body of text and consent to obtain a logotype from almost each word."
		),
	
				array(
			name=>"Matěj Málek",
			school=>"Czech • Masaryk University, Brno, Czech Republic",
			desc=>"Legita was created as a part of a yet to be finished master’s thesis and it is best described as a hybrid text typeface for books combining modern principles with a classical feel. <br />Its large x-height, relatively low contrast and details in shape were designed to support legibility (from which it takes its name) and make it useable even in really small sizes. Legita Book is currently the only typeface in the family, but other companions are planned and waiting to be created."
		),
	
				array(
			name=>"Mercedes Jáuregui ",
			school=>"Argentinian • University of Buenos Aires, Argentina ",
			desc=>"Albura’s strong identity is inspired by the expressionist quality of the age-old relief printing technique — woodcut. The project intends to recuperate the aesthetics of woodcut and translate it into the design of a typeface that is fully expressive yet also functional for text reading. An austere elegance of sorts that echoes the rudeness and imperfection of woodcut, along with the dedication and patience that belong to this type of craft."
		),
	
				array(
			name=>"Michaela Slaninková ",
			school=>"Slovak • Masaryk University, Brno, Czech Republic ",
			desc=>"Mikayla font was designed within a term’s project in agd+m at Masaryk University, Brno in 2012. The motivation of its creation was handmade production, which is very popular nowadays because of its originality.<br />I built Mikayla font on top of my own handwritten font which is hopping on the baseline and decorated by characteristic eyes and arcs."
		),
	
				array(
			name=>"Michele Patanè",
			school=>"Italian • University of Reading, UK",
			desc=>"Overlook is a type family developed with cinema magazines in mind. The sans serif is a neo-grotesque with a certain amount of idiosyncrasies and a wide choice of weights and styles. The serif is the workhorse of the family, a text font developed in four grades for different printing needs, with Bold, Italic and a more expressive style for titles, the Extrabold Display, which features higher contrast and an emphasized stress of the curves. To complete the family there are a Greek and a Devanagari, at the moment developed for the serif regular weight."
		),
	
				array(
			name=>"Natalie Braune",
			school=>"British • Central St Martins, London, UK",
			desc=>"This typeface is based on my friend Jae Kyoung’s handwriting: I used to always be fascinated by her handwriting and wanted to mimic it. Since she is originally from Korea, her writing of roman letters seems to have the same style as her writing of Korean characters, in the sense that they all have the same neat height. I found that the texture created by Korean characters could construct an interesting result if it were to be exaggerated and applied to the roman letters. As a result JK combines both uppercase and lowercase to create a single textured alphabet. "
		),
	
				array(
			name=>"Oscar Guerrero Cañizares",
			school=>"Colombian • University of Buenos Aires, Argentina",
			desc=>"Introducing epica, a contemporary interpretation of Venetian Renaissance types. Designed as an alternative for text on banknotes, Epica is versatile in its sans and serif system, perfectly fit for editorial design, long texts, and usage in print and on screens. <br />Its main features include some calligraphic reminiscences perfectly legible in small and display sizes. Epica encompasses different typographic scenarios with an emphasis in style and functional equilibrium. Each variable is designed with a specific goal and as a complement to the others. It possesses great legibility in body texts, which makes it ideal for extended reading and supports a variety of languages."
		),
	
				array(
			name=>"Patrice Barnabé ",
			school=>"French • ELISAVA, Barcelona, Spain",
			desc=>"Kyrie is a grotesque display typeface with a modern and sophisticated look. The typeface has a regular version set in the uppercase and an alternate version set in the lowercase that are meant to be combined. With 400 glyphs, it supports several European languages besides Basic Latin."
		),
	
				array(
			name=>"Patricio Tralka González Salamanca",
			school=>"Chilean • University of Chile, Santiago",
			desc=>"The Diaguita culture thrived in northern Chilean territory between the 10th and 16th centuries. In regards to their cultural development, the ‘jarro pato’ (duck pot) is an emblem of their pottery and iconography. The Diaguitas drew frets on them such as straight lines, ladders, and black lines on white backgrounds.<br />Canilari is a vernacular typeface family for texts, inspired by these frets. It also has hard features and fast curves that imitate the act of drawing with reeds. Canilari is middleweight and has an almost balanced contrast. In addition, the height ratio of its ascenders to descenders is in proportion, and it tends towards horizontality, just like frets."
		),
	
				array(
			name=>"Pedro Arilla",
			school=>"Spanish • Escuela Superior de Diseño de Aragón, Zaragoza, Spain ",
			desc=>"Valentina was my grandmother: a strong, healthy and vibrant woman, now reborn as a Castilian Didone typeface. This typeface is formed of 457 glyphs that shine in all their splendour at generous display sizes; including 46 ligatures, and 125 alternate characters for the user to explore and enjoy. My sincere wish is that everyone will enjoy using Valentina as much as I have enjoyed designing her. Please, ask her to dance."
		),
	
				array(
			name=>"Rafael Dietzsch",
			school=>"Brazilian • University of Reading, UK",
			desc=>"Primarily designed for publications in Brazilian indigenous languages, Brasílica provides a set of accented characters that support the particularities of these languages, as well as most of the European idioms that use the Latin script."
		),
	
				array(
			name=>"Rafael Jordán Oliver",
			school=>"Spanish • EASD Valencia, Spain",
			desc=>"Nord is a typeface based on the modern style letters of Gregorio Muñoz at the train station ‘L’Estació del Nord’ in Valencia. It was made trying to respect the original forms and solving various problems. <br />This font was created for the final project of Graphic Design of EASD Valencia supervised by Angel Alvarez."
		),
	
				array(
			name=>"Rafael Saraiva",
			school=>"Brazilian • University of Reading, UK ",
			desc=>"Serendip was discovered on a nine-month journey throughout seas never before navigated. The type family is intended to compose the canonical texts of Theravāda Buddhism, supporting the Pāli language as transliterated in Latin and Sinhala scripts. Theravāda scriptures, known as Pāli Tipitaka, compile the teachings of the historical Buddha in an extensive 45 volumes. The project brief was outlined to solve this editorial problem as a robust book typeface, highly legible for long run text setting. However, Serendip has extrapolated its original proposition with the addition of extreme weights, and the family is now a versatile system suitable for a wide range of editorial projects."
		),
	
				array(
			name=>"Raúl Maldonado Periago",
			school=>"Spanish • Bau Design College, Barcelona, Spain",
			desc=>"I am pleased to present my typeface project called ‘Cape’. This typeface is inspired by the era of Russian Constructivism but Saul Bass mixing concepts such as colors and shapes. I wanted to create a solid typography, straightforward and easy to remember. Hope you like.<br />A greeting and thank you very much."
		),
	
				array(
			name=>"Rebekka Marleaux",
			school=>"German • Zurich University of the Arts, Switzerland",
			desc=>"Tulia is a friendly slab serif with typewriter origins. Some characteristics of typewriter fonts give you the feeling of work-in-progress or a quick note and let the writing appear informal. Gentle curves and organic forms counteract the static look-and-feel of typewriter typefaces.<br />Tulia is ideally suited to job printing and headline sizes. With italic and bold, it is also great for use in continuous text."
		),
	
				array(
			name=>"Reiko Hirai",
			school=>"Japanese • University of Reading, UK",
			desc=>"This project is currently in progress at the MA in Typeface Design at the University of Reading. The project brief is to create a harmonious text typeface for Latin and Japanese. "
		),
	
				array(
			name=>"Renata Pokrywińska ",
			school=>"Polish • University of Arts, Poznań, Poland",
			desc=>"Forem — the typeface dedicated to Czesław Miłosz’s works. The contrast and contradictions, typical for Miłosz’s works, have become the starting point to design the font inspired by the poet’s works. Hence, one finds elements which are very smooth, round but also rough and sharply bevelled. The contrast of the boldness is distinctive. This, together with the maintaing the traditional form, makes it look a bit archaic. Nevertheless, it never lacks its universal look.<br />The text typeface was designed for prose as well as poetry. The small print works well in long texts. It includes stylistic variants of roman, italic, bold, bold italic and small capitals."
		),
	
				array(
			name=>"Renata Salerno Polastri",
			school=>"Brazilian • University of Buenos Aires, Argentina",
			desc=>"Cuatro presents the idea of being a gothic/roman hybrid typeface design, combining the legibility of the roman letter, its proportion and formal structure, with the style of the gothic letter, or blackletter. The main purpose is to allow the appreciation of the blacketter essence on the type colour and at the same time, to make the small size legible. Composed of a regular version and italic, it’s a typeface designed to work in paragraph text as a whole and not separately in each character."
		),
	
				array(
			name=>"Rick Jones",
			school=>"British • University of Huddersfield, UK",
			desc=>"Neben pro is a contemporary rounded sans- serif display typeface that has been designed with meticulous attention to detail. The typeface has been specifically designed for large purposes.<br />Neben Pro has been crafted using a pair of fixed width parallel stokes with rounded terminals. The flow from the straight edged stems to the round counters adds contrast and definition to the letter forms. The typeface also uses natural breaks and ink traps in areas that connect and overlap the parallel stokes which means there are not sharp corners in the typeface."
		),
	
				array(
			name=>"Robert Jarzec ",
			school=>"Polish • Graduate School of Humanities and Journalism, Poznań, Poland ",
			desc=>"METRUM is the Polish word for a musical time signature. While it is an elementary and inalienable component of each melody, it is characterized by a wide variety of types. <br />The project refers to transitional and early Didone styles, with modern proportions, refined smoother contrast and a bit more calligraphic feel."
		),
	
				array(
			name=>"Ruben Garcia Ali",
			school=>"Spanish • Escuela Superior de Diseño de Madrid, Spain",
			desc=>"Driven by the frustration of creating graphs within design applications, FF Plink is a fantastic non-traditional, non-alphabetic font family for creating infographics. So glyphs are numbers (0 – 9), comma and plus signs, ‘a’ and ‘b’ characters, and a complete modular system. OpenType code automatically transforms simple strings of numbers in different kinds of graphical charts when discretionary ligatures, stylistic alternates or fractions are activated. <br />Select one font; Plink Radius, Plink Bars, Plink Cheese, Plink Horizontal Bars, Plink Orbit or Plink Core. Using the values 0 – 100 %, type numbers using “+” to combine them into one chart. You can adjust colors if you like. Finally, turn on an OpenType feature and... you got it! "
		),
	
				array(
			name=>"Sabina Chipară",
			school=>"Romanian • EINA, Barcelona, Spain",
			desc=>"Zagoris is a wedge serif typeface with an upright stress, tall x-height and medium contrast, designed for editorial usage. It has a text and a display version, using alternates, both influenced by archaic Romanian letter forms used at the beginning of the 20th century.<br />Zagoris is a work in progress and more weights are presently under development. The work on the design started during the Advanced Typography Master at EINA, Barcelona in 2012."
		),
	
				array(
			name=>"Sanchit Sawaria",
			school=>"Indian • National Institute of Design, Ahmedabad, India",
			desc=>"Akhand devanagari is a family of compact monolinear typefaces. The letterforms are dynamic; typically round shapes appear more compact, as their verticals have been flattened. This straightening out gives text set in the typefaces a streamlined look. Indeed, Akhand Devanagari is designed according to a modular system. All shapes bear a strong commonality to each other, without becoming repetitive. However, the curves in the modules have all been optically corrected, removing the mechanical nature that would otherwise become too dominant. <br />The family includes 8 font styles in upright and 8 in italics. Each of the 16 font styles contains 892 glyphs, offering full support for conjuncts and ligatures."
		),
	
				array(
			name=>"Sandra Adler",
			school=>"German • University of Reading, UK",
			desc=>"Emelia is a friendly typeface family for hierarchical typesetting. It is the result of nine months’ study during the MA programme in Typeface Design at the University of Reading, UK.<br />The family provides a variety of weights and styles (light, regular, bold, black, italic) to enable more design possibilities for complex print publications. With nice, fluent curves and modulated strokes, Emelia communicates a very friendly feel in the Latin as well as in the Tibetan script. Furthermore, it is designed with some playful details that get more distinctive in the light and black versions of the family."
		),
	
				array(
			name=>"Sebastian Losch",
			school=>"German • University of Reading, UK",
			desc=>"Téras is a kindheartedly vicious monster. It has a strong affinity for an entire range of typographic encounters, is highly articulate, slighty deformed, fierce and roughly eight feet tall. Rumour has it that it is fluent in Arabic, Greek, Tamil and Latin. It also has OpenType features."
		),
	
				array(
			name=>"Sergio Daniel Benítez Salado ",
			school=>"Mexican • National School of Arts, Xochimilco, Mexico City ",
			desc=>"CUATRO GATOS CONDENSED is a typeface designed from pen strokes, scanned and digitised with vectors to develop the entire alphabet. The family consists of: condensed thin, bold and 3D; also with a thematic Dingbats collection of cat’s stuff, comics and more. We can find these Dingbats and special glyphs with the smallcaps command, and also in the alternate characters in the keyboard (∂, ∆, π, ∞).<br />Cuatro Gatos is a typeface useful for big sizes as titles or short text. The Dingbats feature gives the family a humouristic click. We can play with the superposition or composition of the glyphs for fun results."
		),
	
				array(
			name=>"Sonia García Quiroga",
			school=>"Colombian • University of Buenos Aires, Argentina",
			desc=>"Aviador regular is a humanistic roman typeface made as a project in the Carrera de Especialización en Tipografía at the University of Buenos Aires. It’s elegant and stylised, and has modulated stems and details that make it a very nice text typeface.<br />The project concept is inspired by the idea of flying, frequently found in the texts of colombian writer Jairo Aníbal Niño. This font is a tribute to him and his influence in Colombian literature.<br />The notion of ‘flying’ is visible in its airy appearance between lines, its long ascenders and the intention of movement in the modulation of the stems and diacritics."
		),
	
				array(
			name=>"Soo Kyung Kim",
			school=>"Korean • Central St Martins, London, UK",
			desc=>" Locho sans is a contemporary sans serif design. This typeface is based on both pen-drawn and geometric letterforms. In addition, the typeface has a large x-height with short ascenders and descenders. The overall treatment of curves is soft and compact. Locho sans is a heavy, bold and condensed face intended for use in posters. "
		),
	
				array(
			name=>"Szymon Sznajder",
			school=>"Polish • University of Arts, Poznań, Poland",
			desc=>"Shelf was designed as my graduation project in Professor Krzysztof Kochnowicz’s Studio at the University of Fine Arts in Poznań. The construction of the font was based on Renaissance Roman typeface while its form is inspired by the landscape of a shelf glacier. <br />Shelf is a typeface for text and identification purposes. It has eight weights. The Regular is the most complex one at the moment. It has stylistic variants of roman, italic and oblique. The oblique together with the roman intend to be a part of informational and navigational systems to help in wayfinding. The regular along with the italic are to be used in long texts. What is more, the typeface includes Cyrillic and Hebrew, a lot of other stylistic variants and OpenType features."
		),
	
				array(
			name=>"Tania Chacana",
			school=>"Chilean • University of Buenos Aires, Argentina",
			desc=>"Mila is a typeface designed for long texts and poetry. It is a typographic approach to Vicente Huidobro’s Altazor book which contains seven songs or chapters that makes a transit from the rational to the abstraction. <br />It is a Roman humanistic typeface that tries to accomplish legibility for small sizes. <br />It is accompanied by two weights: bold and light; and an italic, which provides a more contrasted axis than the roman."
		),
	
				array(
			name=>"Teja Smrekar ",
			school=>"Slovenian • Academy of Fine Arts and Design, University of Ljubljana, Slovenia ",
			desc=>"Silva is a typeface family developed as a part of a diploma thesis at University of Fine Arts and Design in Ljubljana. Its purpose is to be used as a text and display face in a print edition of Anthology of Poetry of 100 young Slovenian poets. It has calligraphic tendencies with a contemporary feeling influenced by gothico-antiqua types of letters."
		),
	
				array(
			name=>"Thierry Fétiveau",
			school=>"French • GraphiCréatis, Nantes &amp; ESAD Amiens, France",
			desc=>"Andersen typeface refers to the Danish writer Hans Christian Andersen,
	author of numerous tales. This typeface is intended for use in children’s stories
	in general. What makes Andersen different is its new punctuation system. Indeed, in addition to classical glyphs, Andersen has 15 totally new punctuation signs expressing feelings (joy, anger, worry, love, fear). As in Spanish punctuation, these glyphs are placed at the beginning and at the end of a sentence to help the reader find the right tone."
		),
	
				array(
			name=>"Thomas Kim",
			school=>"French • École de Communication Visuelle (ECV), Paris, France",
			desc=>"Loire is a typeface revival inspired by a gothic architecture book from 1925.<br />Two versions were designed with different terminals; the second version proposes a straighter aspect.<br />Loire took its name from the Châteaux of the Loire, part of French architectural heritage."
		),
	
				array(
			name=>"William Montrose",
			school=>"German / us • University of Reading, UK<br /> ",
			desc=>"Onim™is a punch-cutting fantasy turned into Bézier curves. A tribute to craftsmanship sans nostalgia. Chunky elegant curves deriving from a broad scuffed nib, worked into metal with gravers and files. Angular calligraphic strokes cast into typographic solutions for modern day book setting. "
		),
	
				array(
			name=>"Will Smith",
			school=>"British • University of Huddersfield, UK",
			desc=>"Stripe is a geometric typeface built on a 900×900 grid, divided into 500 units from baseline for the x height, 700 units from baseline for cap height and -200 units for descender line. The large x-height is over 55% of the grid and over 70% of any character, to increase visual size and ease legibility. All six weights have standardised x-height and cap height.<br />StripeMinus is inspired by Brian Coe’s experimental alphabet where he reduced lowercase letters to the fundamental parts stopping just before the point of illegibility. It was created using Stripe as the skeleton, and drastic contrast between crucial and non-crucial elements of each character to create a unique reading experience which at first looks alien, but with a closer look and familiarisation becomes readable."
		),
	
				array(
			name=>"Ying Tong Tan",
			school=>"Singaporean • Central St Martins, London, UK",
			desc=>"Lala is a typeface inspired by an anonymous photo of a poster. Designed initially as a stencil typeface before its digitisation, Lala is heavy in weight with painstakingly thin cut lines to add contrast and movement.<br />Lala comes in solid and striped weights, each equipped with regular, italic, and reversed (left slant). It is best suited for large displays and words that will show its detailed stripes, and its robust yet quirky character."
		)
	); 

?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Student Typeface Exhibition</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<script type="text/javascript">
		var html = document.getElementsByTagName('html')[0];
        html.className = 'js wf-loading';
        setTimeout(function() {
            html.className = html.className.replace(' wf-loading', '');
        }, 3000)
        WebFontConfig = { fontdeck: { id: 29643 } };
        (function() {
            var wf = document.createElement('script');
            wf.src = '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();

	</script>
<link rel="stylesheet" href="css/styles.css">
<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
</head>

<body id="wrapper" class="vevent exhibition-page">

	<?php include("includes/header.php"); ?>

<!-- sponsors-page -->
<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
	
	<article class="section exhibition-page clearfix">
		<h1>Student Typeface Exhibition</h1>
		<p class="loud">Ampersand 2013 is delighted to announce the first international student typeface exhibition, showcasing the best of student type design from around the world.</p>
		
		<section class="sponsorship-pack">
		
		
		<a href="Student_Exhibition_Book.pdf">
			<div class="button">Student Exhibition Book<br/><small>(24.3Mb PDF)</small></div>
		</a>
		<br />

<a href="Student_Exhibition.pdf">
	<div class="button">Student Exhibition Media Pack<br/><small>(1.3Mb PDF)</small></div>
</a>

		</section>
		
		<p>The conference presented the diversity of emerging designers&#8217; work in both print and web specimens, along with a bound take-home catalogue recording the thriving landscape of type design education today.</p>
		
<ul class="posters">		

<?php
$count = count($posters);
for ($i = 0; $i < $count; $i++) {
$id = $i+1;
settype($id, "string");
$id = str_pad($id, 3, "0", STR_PAD_LEFT);
echo "<li><a class=\"fancybox\" data-title-id=\"title-".$i."\" href=\"posters/big/".$id.".jpg\"><img src=\"posters/th/".$id.".jpg\" alt=\"\"/></a>\n";
echo "<div id=\"title-".$i."\">\n";
echo "	<h5>".$posters[$i]["name"]."</h5>\n";
echo "	<h6>".$posters[$i]["school"]."</h6>\n";
echo "	<p>".$posters[$i]["desc"]."</p>\n";
echo "</div>\n";
echo "</li>\n";
}

?>
	
</ul>	

</article>
		

</div><!-- END MAIN CONTENT -->	
	
<?php include("includes/footer.php"); ?>
	
<script type="text/javascript">

$(document).ready(function() {
	if(window.innerWidth>548) {
		$(".fancybox")
		    .attr('rel', 'gallery')
		    .fancybox(
		    	{
		    	helpers : {
		            title: {
		                type: 'float'
		            }
		        },
		        beforeLoad: function() {
		            var el, id = $(this.element).data('title-id');
		
		            if (id) {
		                el = $('#' + id);
		            
		                if (el.length) {
		                    this.title = el.html();
		                }
		            }
		        },
		        afterShow: function() {
		        	window.setTimeout(moveTitle, 10)
		        }
		});
	}
});

function moveTitle() {
	$(".fancybox-wrap").css({"width": "+=250", "left": "-=125"});
	$(".fancybox-skin").addClass("clearfix");
	$(".fancybox-title-float-wrap, .fancybox-wrap").fadeIn();
}

</script>
</body>
</html>
