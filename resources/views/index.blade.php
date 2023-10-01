<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VFF - Voies Ferrées de France</title>

        @vite('resources/css/general.css')
        @vite('resources/css/index/index.css')
        @vite('resources/js/index/indexImport.js')
    </head>
    <body>
        <header>
            <div class="header-background">
                    <nav>
                        <ul>
                            <li>BLOUD</li>
                            <li>BLOID</li>
                            <li>BLIDD</li>
                            <li>DLUDD</li>
                        </ul>
                    </nav>
                    <div class="header-images">
                        <figure class="left-tgv">
                            <img src="{{ Vite::image('tgv - left.png') }}" alt="Queue du TGV">
                        </figure>
                        <figure>
                            <img src="{{ Vite::image('vff.png') }}" alt="Logo de VFF">
                        </figure>
                        <figure class="right-tgv">
                            <img src="{{ Vite::image('tgv - right.png') }}" alt="Tête du TGV">
                        </figure>
                    </div>
                </div>
        </header>
        <main>
            <section id="whoarewe">
                <div class="vff-title">
                    <img src="{{ Vite::image('vff.png') }}" alt="Logo de VFF">
                    <h1>VFF - À la croisée des rails</h1>
                </div>
                <p>Nous sommes VFF, une plateforme en ligne créée par deux passionnés du rail. Notre mission est de documenter et de partager des informations sur les lignes ferroviaires, qu'elles soient en service ou fermées. Grâce à nos cartes collaboratives basées sur des données d'archives et sur le travail de nombreux collaborateurs, nous pouvons vous proposer l'une des plus grande base de données concernant le chemin de fer amateur en France. Vous pouvez contribuer vous aussi à enrichir cette base de données en complétant les infos des voies ferrées que vous connaissez. De plus, notre API publique permet aux développeurs d'explorer et d'utiliser nos données pour créer des applications innovantes dans le domaine ferroviaire. Rejoignez notre communauté pour explorer le monde fascinant des chemins de fer et partager vos connaissances avec d'autres passionnés.</p>
                <div class="whoarewe-buttons">
                    <a href="/whoarewe"><i class="bi bi-people"></i> Notre histoire</a>
                    <a href="/donate"><i class="bi bi-balloon-heart"></i> Faites un don</a>
                </div>
            </section>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aut dolorem eligendi error
                esse exercitationem facilis fugiat incidunt inventore iure labore, laboriosam nam nobis officiis optio
                ratione rerum, sit tempore temporibus unde voluptas voluptatem. Assumenda esse possimus quisquam
                reiciendis totam? Accusamus accusantium at autem consequatur cupiditate deleniti deserunt dolore
                doloremque eos, exercitationem explicabo illo inventore iste labore laborum nemo odit officia
                perspiciatis placeat praesentium quia sed sint temporibus totam voluptatem. Animi, architecto at
                dolorem, enim esse est excepturi explicabo illo molestias odio perspiciatis quidem quod vero? A
                architecto beatae dicta ea eos facere inventore ipsam, laboriosam obcaecati placeat quae repudiandae sit
                voluptates. A animi autem eaque expedita minima mollitia placeat quam reiciendis sint voluptates?
                Consequatur dignissimos doloremque dolores, eum ex facere fugiat ipsa magni odit quibusdam quod
                reiciendis vero vitae. Accusantium cupiditate dolorum eum, ipsam nam officia perspiciatis praesentium
                ut. A ab accusamus architecto asperiores aspernatur beatae commodi debitis deleniti deserunt dignissimos
                dolores doloribus eaque eligendi eos facere illo inventore libero mollitia natus non, odit optio porro
                quidem quisquam quo recusandae repellat sequi sint sit soluta tempora, velit voluptates voluptatibus.
                Alias, cumque cupiditate, debitis deleniti eos et laudantium magni modi nesciunt nobis nostrum odio
                porro provident temporibus tenetur velit vero voluptatem. A, adipisci blanditiis corporis cum cumque et
                explicabo, id illum iusto, mollitia nam nostrum numquam omnis praesentium quisquam reprehenderit vel! Ab
                accusamus amet architecto cumque cupiditate ducimus eligendi est explicabo facere hic id incidunt
                inventore labore, laboriosam laudantium magnam magni minima neque odio quasi quia quos sapiente,
                tempora, ut veritatis. A asperiores atque beatae cum cupiditate dolor dolore ea eos est et eum inventore
                ipsum laboriosam magnam, magni minima, nam non nostrum odio officiis praesentium quia quod recusandae
                repellat reprehenderit soluta suscipit temporibus vel voluptas voluptate! Aperiam aut deleniti eius
                laboriosam voluptate? Accusamus culpa dolorum fugit hic ipsam magnam maxime molestiae non odio, pariatur
                qui quod, sapiente, vel velit vero? Atque culpa debitis dolorem eaque, eos et excepturi fugiat in labore
                minus necessitatibus optio perspiciatis quisquam sit tenetur. Adipisci, aliquid deserunt ea eos facilis,
                fuga id in magnam magni maiores nesciunt, nobis officiis placeat quo reiciendis repudiandae sed sequi
                tempora unde veritatis? Ab ad autem blanditiis consequuntur debitis, dignissimos explicabo in ipsum iure
                numquam quam rem rerum saepe sequi, voluptatum! Consectetur dignissimos illum laborum reiciendis ut
                voluptatem? Accusamus adipisci blanditiis culpa libero quam suscipit vero? Ad cumque delectus doloribus
                ea earum incidunt neque nostrum numquam quas vitae! Ab, alias animi aperiam asperiores blanditiis dicta
                doloremque eaque, enim error illo incidunt inventore maxime minima nisi nulla quaerat quo sit voluptas.
                A ab ad amet animi aspernatur assumenda consectetur debitis dicta dolore doloremque dolores doloribus
                dolorum eaque, earum enim error, et excepturi fuga fugit ipsum iure iusto libero maiores minus molestiae
                odit officiis optio pariatur possimus quas quos repellendus reprehenderit rerum sit tempora velit
                voluptate. Corporis culpa cumque cupiditate, delectus deserunt dolore doloremque enim eos error et
                fugiat illum incidunt ipsum itaque minus modi molestiae nemo numquam obcaecati odit omnis perferendis
                possimus quia quibusdam sapiente suscipit tempore veniam vitae voluptas voluptatum. A accusantium alias
                aliquid animi assumenda atque consectetur cum cupiditate deleniti dicta distinctio ducimus, ea enim eos
                esse ex harum hic inventore laborum magnam molestiae molestias natus obcaecati perspiciatis placeat
                provident quaerat quo reprehenderit similique soluta sunt tempora tenetur unde velit vitae voluptas
                voluptate. Ad commodi distinctio est et mollitia perspiciatis provident quam quia, saepe sit, velit,
                voluptate voluptatibus? Ab aperiam consectetur dignissimos, distinctio dolorem enim est impedit
                inventore itaque mollitia nisi nulla obcaecati omnis perferendis porro, quis quo reprehenderit similique
                sint temporibus unde, vitae voluptas! Accusamus adipisci commodi dolorem dolorum eius, fugiat iusto
                minima possimus praesentium, quisquam saepe totam ut voluptatibus? Accusamus architecto, doloremque
                ducimus eos molestias quidem velit! Accusamus amet beatae cum, cumque cupiditate dicta dolores dolorum
                eos esse est et eum incidunt itaque maiores molestiae molestias nam nisi officiis optio quae quia quis
                quod quos ratione recusandae reprehenderit sit suscipit tempora tempore voluptatem! Accusamus alias
                architecto at consequuntur, corporis deleniti, dicta enim esse eum facere minus modi necessitatibus quam
                quisquam suscipit veritatis vitae. Nulla officia recusandae saepe. Adipisci animi asperiores delectus
                ducimus eius fuga iste iure libero maiores maxime necessitatibus, quas tenetur velit, veritatis vero?
                Adipisci aliquam assumenda, consectetur delectus deserunt dolore eligendi facilis fuga ipsam ipsum
                molestias neque nesciunt nostrum officia, quaerat quos tenetur vitae voluptas voluptatem voluptatibus.
                Autem corporis dicta distinctio eaque fuga fugit illum iste laudantium minima, mollitia nostrum nulla
                officia porro praesentium quidem quis quos ut vel, vero voluptas. A accusamus architecto, assumenda
                blanditiis cumque cupiditate debitis dolor dolorum et illum in laborum modi mollitia necessitatibus nisi
                perspiciatis porro quaerat quasi quia quibusdam rem repellat veritatis, vero voluptate voluptatibus.
                Aliquam aliquid animi blanditiis consequuntur corporis, dicta eaque eos est laboriosam, laudantium
                libero magnam minima mollitia nam nisi nobis, officia optio provident quam quia quo reiciendis repellat
                reprehenderit sed soluta vel veniam vero! Ad culpa laborum necessitatibus odit possimus voluptas.
                Accusamus, accusantium assumenda commodi cupiditate est et fuga illo itaque libero nemo, quod, tempora.
                Amet aperiam architecto assumenda corporis, cumque debitis deleniti distinctio eos esse eum explicabo
                harum incidunt ipsum iusto laborum minus modi nostrum nulla odit officia praesentium quae quasi quo quod
                recusandae repellat repudiandae similique ullam vero voluptatum. Ab accusamus ad assumenda commodi
                consequuntur cumque cupiditate debitis deleniti deserunt eaque ex hic id, ipsam iure laudantium magnam
                maxime nisi, porro provident quasi quidem quis quod, rem sint soluta. Accusamus adipisci consectetur
                cupiditate enim impedit ipsum laborum magnam minima mollitia nesciunt pariatur quae, rem repellat velit
                vitae. Consectetur earum illo laudantium nam, necessitatibus quidem ratione totam. Dolore explicabo
                natus reprehenderit sunt. Accusantium ad, alias at dicta distinctio dolores ea enim, error explicabo
                fugit harum nam non obcaecati perferendis quas, quasi quia repudiandae sunt veritatis vitae? Debitis
                dolores ea enim illum itaque voluptatibus! Aliquam aspernatur at consectetur dolorem doloremque earum
                excepturi expedita, explicabo facilis harum id in inventore, iste iusto libero maiores maxime modi
                molestiae mollitia nam neque quaerat quibusdam reiciendis rerum saepe tenetur totam, veritatis. Ipsa
                iure maxime nam praesentium saepe tempora. Aliquid animi asperiores dicta exercitationem omnis quasi. A
                accusamus adipisci aliquid, animi architecto eius error ex facilis magnam magni nemo, odit reiciendis
                repudiandae sapiente temporibus ullam ut veniam. A dolor doloribus ducimus modi nulla tempora totam
                veritatis. Animi cupiditate ex id, ipsum itaque laboriosam laudantium voluptas. Aliquam aliquid
                consequatur, deserunt fugit, in labore, laborum libero necessitatibus nobis provident sed similique
                tempora unde! Ad adipisci aliquid aspernatur debitis delectus deserunt dignissimos ducimus est et
                expedita in inventore ipsa ipsam iste libero maiores maxime modi natus nemo nobis odit possimus quod,
                quos rem repellat temporibus unde vel veniam vero voluptas! Consectetur expedita harum nam pariatur
                quaerat quasi quia! Assumenda autem dignissimos dolorem, error fugit labore neque numquam obcaecati
                officia optio perferendis provident qui quidem quod repudiandae sequi similique temporibus totam.
                Aliquam animi aspernatur at consectetur cumque doloremque eius et exercitationem facilis hic ipsum
                mollitia, numquam odio officia omnis perspiciatis praesentium provident quae quam ratione, repellat vero
                voluptatem voluptates! Accusamus adipisci alias aliquam aliquid consectetur deleniti dolorem dolorum
                esse expedita, id in itaque laboriosam libero molestiae optio perferendis praesentium quam qui quo
                repudiandae similique sint sit tempora tempore velit? Alias commodi consequatur cum molestiae
                perspiciatis quasi quia reprehenderit totam. A aperiam asperiores consectetur corporis eveniet, nesciunt
                repellendus totam. Ab autem beatae culpa dignissimos dolore, eos iste, laudantium nulla quaerat quia
                quis quod sequi tenetur! Ab asperiores autem commodi consectetur consequatur dolor eos ipsa laborum
                maxime, minima odit officiis placeat quia recusandae rem repellendus reprehenderit sunt temporibus vero
                voluptas! Aut blanditiis consequuntur qui rerum veniam vero vitae? Accusamus aliquid, asperiores
                aspernatur at culpa deleniti doloremque dolores earum eius eligendi expedita fugiat impedit, inventore
                ipsam ipsum molestiae nam nemo odio perferendis possimus quis quo, rerum unde vero voluptas? Aliquam
                assumenda consequuntur debitis et id iste omnis! Amet aperiam asperiores debitis, delectus, dolore
                doloremque dolores eum ex itaque modi molestias nesciunt nihil odio quam quidem, rem saepe sapiente ut
                vitae voluptatem. Aliquam atque corporis dolor dolores ducimus, esse eveniet facilis illum iste itaque
                libero magni maiores minima nesciunt nostrum pariatur possimus ratione recusandae similique sint soluta
                ullam veritatis! A ab accusantium aliquid aperiam architecto asperiores assumenda at commodi cupiditate
                dicta distinctio facere facilis illum ipsa iste labore laborum molestiae nemo nisi non, officiis quae
                qui quisquam recusandae reiciendis reprehenderit sapiente sequi veniam veritatis voluptatibus. Aliquid
                aspernatur assumenda commodi corporis earum eligendi hic maxime natus non praesentium, qui, quisquam
                sunt voluptate voluptatem voluptatum. Accusamus atque aut enim natus quia. Illum porro, quam. Aspernatur
                delectus distinctio eos est excepturi itaque maxime non rem soluta vero. Accusantium alias cumque dolore
                dolores doloribus harum illo nesciunt nobis quaerat quas quisquam, ratione soluta temporibus? Ab
                asperiores dicta dolorum excepturi ipsa iure labore magni, minima, modi molestiae quia, sit unde vero?
                Ab accusantium aperiam beatae consectetur doloribus dolorum eligendi enim, explicabo iure labore maxime
                molestiae nam nihil officia, perspiciatis quaerat sapiente tempore temporibus tenetur vel. A accusantium
                ad aspernatur aut culpa cumque delectus dolor ducimus eaque illo illum impedit incidunt ipsam magni
                maiores molestiae mollitia nesciunt odio odit, quas ratione reiciendis sint sit tempore temporibus
                tenetur unde vero. Aspernatur assumenda eos ex fugiat in iste nulla provident quibusdam voluptas
                voluptate. Adipisci amet aspernatur assumenda blanditiis commodi consequatur cumque, dolore ducimus
                eaque eligendi exercitationem fugiat ipsum itaque libero molestiae molestias nulla omnis, possimus
                provident quas quibusdam, quisquam quos repellat sapiente similique sint veritatis voluptate. Adipisci
                cum dolores et in ipsa, molestiae nobis odit pariatur temporibus vero. Dolorum error hic incidunt minima
                nemo suscipit tempore! Aliquid consectetur, et eveniet expedita fuga id non odio officiis placeat quam
                recusandae rem sed voluptates. Asperiores nisi quasi quidem repellat vero! A accusamus aliquid amet
                deserunt dolor dolore dolorum est exercitationem explicabo fugit hic itaque laudantium omnis repellat
                sapiente, sequi sunt! Delectus expedita ipsa quis repudiandae tempore. A animi aspernatur cum delectus
                deserunt dolorem eaque earum, eligendi, fuga hic ipsum iste maiores minus mollitia provident quae quam
                quo repudiandae similique unde! A aspernatur distinctio ducimus et labore, odio ratione vero vitae
                voluptas voluptatem. Architecto consequuntur doloremque hic nobis nulla odit voluptas. Beatae dolor ea
                praesentium voluptatem? A architecto aspernatur autem, deserunt ducimus error explicabo fugiat illo
                impedit laudantium nihil quisquam sint ullam vel voluptatem! Alias aspernatur, fugiat id incidunt labore
                magni minima optio porro quis vitae. Adipisci aliquid autem beatae commodi consequatur cum, dolore
                doloremque, doloribus ea eaque earum iusto libero minus, molestias nesciunt nisi obcaecati optio quaerat
                quas quia quo quod ratione repudiandae sequi tenetur unde velit vero! A aliquam autem corporis
                cupiditate deleniti dignissimos distinctio dolores eaque eligendi enim est facere id impedit in
                inventore iste labore laudantium nam nostrum odit optio placeat quam quisquam quod sit sunt suscipit,
                tenetur vel veritatis voluptate! Accusamus ad architecto assumenda debitis, ea, illo in maiores
                obcaecati qui, quisquam repudiandae vero? Assumenda consectetur consequuntur dignissimos dolore, dolorum
                eaque excepturi facilis inventore laboriosam nam, nisi obcaecati officiis perferendis porro provident
                quae quibusdam quis quod reiciendis sed temporibus vel voluptas. Aut, consequatur consequuntur corporis
                ducimus eligendi minus officiis, placeat porro possimus, quia quod ut? Ad aliquid, asperiores aspernatur
                aut beatae commodi corporis culpa, doloremque esse eveniet facere illum labore molestias nobis obcaecati
                odit, perferendis quaerat quidem quisquam quod recusandae repellat sed tempore totam velit. Consequatur
                ea ipsam magnam vel. Adipisci cupiditate deserunt, doloribus, eaque enim harum maxime perspiciatis
                quaerat quasi ratione sapiente totam unde? Alias aliquam autem dignissimos, ducimus, earum harum id in
                officia quasi sed soluta sunt ullam voluptatibus! Aut cupiditate deserunt eaque expedita explicabo id
                nulla rerum voluptate! Animi, architecto commodi consectetur cumque distinctio dolore, dolorem dolorum
                earum eos est eum id impedit itaque iure maxime minus molestiae optio placeat ratione reiciendis rem
                repellendus, rerum sequi tempora velit? A, asperiores atque corporis debitis deserunt dolorem earum eius
                esse id inventore molestiae neque numquam omnis quibusdam quisquam repellat reprehenderit saepe
                suscipit. Alias amet dicta, dolore hic laborum modi perferendis quas tempore voluptatum? Aperiam,
                assumenda corporis deleniti dolorem doloribus dolorum eius laudantium maxime nisi perspiciatis quam quo
                ratione ut vero voluptas! Ab aperiam, aut cum debitis dicta doloribus dolorum eaque, eligendi enim, eum
                excepturi exercitationem ipsa iste labore laborum libero nesciunt odio omnis perspiciatis quia quis quod
                rem reprehenderit sint tempora ut?</p>
        </main>
    </body>
</html>
