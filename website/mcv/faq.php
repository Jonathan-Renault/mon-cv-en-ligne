<?php
include('inc/fonctions.php');
include('inc/pdo.php');
$title = 'FAQ';


include('inc/header.php');

?>
  <div class='centerplease'>
        FAQ MCV
    </div>

      <br>

<div class="content">

        <div>
            <input type="checkbox" id="question1" name="q"  class="questions">
              <div class="plus">+</div>
                  <label for="question1" class="question">
                    Quand et par qui a été inventée la vaccination ?
                  </label>
              <div class="answers">
                   La vaccination est maintenant devenue un rite étendu à la quasi-totalité des populations humaines. Cette pratique a débuté de manière empirique. En Asie centrale, au début du second millénaire, l’homme savait déjà se protéger de la variole en imprégnant ses muqueuses nasales avec des squames recueillies chez des malades et atténuées par une conservation dans un macérât de plantes. Malgré sa promotion par des personnalités telles que Voltaire, cette forme de vaccination ne fût jamais répandue en Europe car elle soulevait méfiance et donc opposition.

                  Une seconde étape, toujours empirique, fût franchie en Angleterre grâce à Edouard Jenner, le 14 mai 1796. Ce médecin de campagne inocula par scarification à James Phillip, un enfant de 8 ans, du pus prélevé sur la main d'une fermière infectée par la vaccine ou variole des vaches (en anglais, «cow-pox»). Trois mois plus tard, il inocula la variole à l'enfant qui se révéla immunisé.

                  A force d’opiniâtreté, Jenner a probablement réussi à imposer sa méthode de vaccination variolique parce que l’utilisation de la vaccine, agent de la variole de la vache, était moins inquiétante pour la population. Le mot vaccination vient du latin vacca qui signifie vache.

                  La troisième étape est pasteurienne. En maîtrisant le processus d’atténuation, Louis Pasteur a su faire évoluer une technique empirique en une méthode de prévention basée sur une démarche scientifique, emporté l’adhésion de ses contemporains, ouvert la voie à la vaccination de masse et dressé les bases d’une nouvelle discipline, la vaccinologie.
            </div>
        </div>

        <div>
           <input type="checkbox" id="question2" name="q" class="questions">
              <div class="plus">+</div>
                  <label for="question2" class="question">
                        Pourquoi se faire vacciner ?
                  </label>
              <div class="answers">
                    Le principe de la vaccination est d’aider le système immunitaire à lutter contre diverses maladies infectieuses, qu'elles soient liées à des bactéries (diphtérie, typhoïde…) ou des virus (rougeole, grippe…). En mettant l'organisme humain en contact avec des substances proches ou dérivées d'un agent pathogène (bactérie, virus), il se développe une réponse immunitaire  spécifique de l'agent pathogène et protectrice de la maladie causée par cet agent  : en cas de contact avec la bactérie ou le virus contre lequel une personne a été protégée, la réponse immunitaire sera prête à temps pour empêcher l'apparition de la maladie ou, à défaut, la survenue d'une forme grave. En résumé, la vaccination permet de se protéger contre la maladie sans en faire les frais. Des effets indésirables peuvent survenir mais dans la très grande majorité des cas ils sont mineurs et passagers. De nombreux vaccins existent et leurs indications dépendent des risques d’exposition propres à chacun, d'où l'intérêt de recommandations personnalisées.

                    Se vacciner, c’est se prémunir contre des maladies potentiellement graves de manière simple et efficace, mais c'est aussi éviter la diffusion d’épidémies au sein de la population, car les personnes vaccinées ne peuvent pas transmettre la maladie à leur  entourage (enfants, collègues de travail…).
            </div>
        </div>


        <div>
           <input type="checkbox" id="question3" name="q" class="questions">
              <div class="plus">+</div>
                <label for="question3" class="question">
                    Qu'est-ce qu'un vaccin atténué ?
                </label>
            <div class="answers">
                  C'est un vaccin qui contient l'agent infectieux responsable de la maladie vivant mais atténué par différents procédés techniques ; grâce à cette atténuation (inventée par Pasteur), cet agent infectieux perd sa virulence mais conserve son pouvoir immunogène, à l'origine de la protection vaccinale.

            </div>
        </div>


        <div>
           <input type="checkbox" id="question4" name="q" class="questions">
              <div class="plus">+</div>
                  <label for="question4" class="question">
                      Pourquoi faut-il respecter un intervalle entre chaque dose vaccinale ?
                 </label>
            <div class="answers">
              Après contact de l'antigène vaccinal avec l'organisme (le plus souvent par une injection), le déroulement de la réponse immunitaire prend un certain temps. L'administration de doses à des intervalles trop rapprochés peut perturber et amoindrir cette réponse immunitaire. Par contre, l'allongement de l'intervalle entre deux doses n'a pas d'effet négatif. Il est d'ailleurs inutile et déconseillé de reprendre une vaccination "à zéro" : il suffit de reprendre le schéma vaccinal au point où il a été interrompu et de donner les doses manquantes.
            </div>
        </div>


        <div>
           <input type="checkbox" id="question5" name="q" class="questions">
              <div class="plus">+</div>
                 <label for="question5" class="question">
                    Je suis enceinte. Est-ce une contre-indication aux vaccinations ?
                 </label>
            <div class="answers">
                C'est une contre-indication à certaines vaccinations, notamment aux vaccins vivants.
            </div>
        </div>


        <div>
            <input type="checkbox" id="question6" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question6" class="question">
                    Je suis asthmatique. Est-ce une contre-indication aux vaccinations ?
                </label>
            <div class="answers">
                  Non seulement l'asthme n'est pas une contre-indication aux vaccinations mais au contraire il s'agit d'une indication de certaines vaccinations en raison de la fragilité que cette maladie confère vis-à-vis de certaines infections respiratoires, notamment contre la grippe et le pneumocoque (vous pouvez tester ces conditions dans l'onglet "Recommandations particulières" de MesVaccins.net).
            </div>
        </div>


        <div>
          <input type="checkbox" id="question7" name="q" class="questions">
            <div class="plus">+</div>
              <label for="question7" class="question">
                    Mon voisin a été vacciné contre la grippe : il a attrapé la grippe le lendemain !
              </label>
          <div class="answers">
             On confond souvent la grippe avec d'autres infections respiratoires aiguës fébriles. De plus, l'efficacité de la vaccination contre la grippe n'est pas totale. Elle est environ de 70 % chez les adultes, et nettement plus faible chez les personnes âgées (35 à 40 %). Par ailleurs, chez une personne non vaccinée contre la grippe précédemment, un délai de 10 à 15 jours est nécessaire pour être protégé grâce à la production d'anticorps spécifiques. Une grippe qui se manifeste chez une personne vaccinée a plus de chances d'être moins grave qu’en l’absence de vaccination.
          </div>
        </div>



        <div>
          <input type="checkbox" id="question8" name="q" class="questions">
            <div class="plus">+</div>
              <label for="question8" class="question">
                      Pourquoi simplifier le calendrier des vaccinations?
             </label>
          <div class="answers">
                  Le calendrier des vaccinations est complexe : il vise à protéger la population générale et certaines populations spécifiques au plus juste de l'état des connaissances scientifiques. Ainsi, il prend notamment en compte les situations épidémiologiques régionales et la fragilité de certains groupes de personnes.
                  La simplification du calendrier des vaccinations s'est appuyée sur l'expérience d'autres pays européens (Suède, Danemark, Finlande et Italie) et les fondements de divers calendriers vaccinaux pour optimiser le nombre d'injections nécessaires à la protection de la population et rendre les âges des rendez-vous vaccinaux plus facilement mémorisables par les professionnels de santé et le public.
          </div>
        </div>


        <div>
          <input type="checkbox" id="question9" name="q" class="questions">
              <div class="plus">+</div>
                <label for="question9" class="question">
                          Pourquoi un vaccin contre la grippe différent chaque année ?
                </label>
            <div class="answers">
                      Toute vaccination vise à préparer un individu à se défendre contre un agent infectieux en apprenant à son organisme à le reconnaître. Pour cela, il est mis artificiellement en contact par le vaccin avec une forme inactivée du virus. Pour que la vaccination soit efficace, le vaccin doit avoir une bonne ressemblance avec les antigènes susceptibles d'induire une protection contre la maladie.
                      Le vaccin préparé une année est inefficace l'année suivante, car les virus en circulation sont différents de ceux à partir desquels il a été préparé. S'adapter aux variations du virus de la grippe est l'un des impératifs de la fabrication des vaccins.
          </div>
      </div>


      <div>
          <input type="checkbox" id="question10" name="q" class="questions">
            <div class="plus">+</div>
               <label for="question10" class="question">
                    De quoi se composent les vaccins ?
              </label>
          <div class="answers">
              Les vaccins comportent des antigènes c'est-à-dire des éléments qui vont induire une réponse immunitaire capable de protéger l’individu contre l’infection naturelle ou d’en atténuer les conséquences. (bactéries ou virus vivants atténués, agent bactérien ou viral entier inactivé, fractions antigéniques ou sous-unités vaccinantes).

              Les autres composants sont les adjuvants (sels d’aluminium, adjuvant lipidique..) qui stimulent la réaction immunitaire induite par les vaccins, les conservateurs (thiomersal) qui évitent le risque infectieux principalement retrouvé dans les présentations multidoses, et des agents inactivants (formaldéhyde) pour l’inactivation et la détoxification des agents infectieux.

              Source : ANSM.
          </div>
    </div>

</div>

<?php include('inc/footer.php');
