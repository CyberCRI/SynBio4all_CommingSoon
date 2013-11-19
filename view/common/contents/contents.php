<?php /*
<div id="Overview" class='info_div arondit' >
	<div class="titre_infos" >
		<h2>Overview</h2>
	</div>
	<div class='info arondit' >
		<div class='text_info' >
			<p>
				SynBio4all is a synthetic biology learning through research platform. We aim to have an open science environment, where every stage of the research process, specifically the idea conception, development of a research plan, conducting the research, and analyzing results will all be done by you, the participants through use of this online platform.
			</p>
		</div>
	</div>
</div>

<div id="syntheticBiology" class='info_div arondit'>
	<div class="titre_infos" >
		<h2>What is Synthetic Biology?</h2>
	</div>
	<div class='info arondit' >
		<div class='text_info'>
			<p>
				Synthetic biology is an emerging interdisciplinary scientific field, which applies engineering principles to biological systems by using the genetic blueprints from biology to systematically design and build new biological devices from biological parts with known functions. This research area has the potential tools to meet some current societal challenges including: energy, environment, food production, and drug development.
			</p>
		</div>
	</div>
</div>

<div id="Goals " class='info_div arondit'>
	<div class="titre_infos" >
		<h2>Goals</h2>
	</div>
	<div class='info arondit' >
		<div class='text_info'>
			<p>
				The goal of this site is to give DIYers, scientists, citizen scientists, and science enthusiasts an opportunity to work collaboratively on their own synthetic biology research projects. 
			</p>
		</div>
	</div>
</div>

<div id="Features" class='info_div arondit'>
	<div class="titre_infos" >
		<h2>Features</h2>
	</div>
	<div class='info arondit' >
		<div class='text_info'>
			<em>
				Discover and learn about synthetic biology
			</em>
			<br/>
			<p>
				A portal of learning materials is being developed for participants from all levels and backgrounds to learn about synthetic biology as well as some of the exciting ongoing research in the field.
			</p>
			<br/>
			<em>
				Submit your own synthetic biology research idea
			</em>
			<br/>
			<p>
				Once inspired, participants will be able to submit their research ideas to our synthetic biology community forum.
			</p>
			<br/>
			<em>
				Develop a research plan
			</em>
			<br/>
			<p>
				The research ideas are next shaped into a testable hypothesis with the help of the SynBio4all community. Community members will then have the opportunity to join the research project and develop a research plan and potentially test the hypothesis in a scientific laboratory.
			</p>
			<br/>
			<em>
				May the best research plan win!
			</em>
			<br/>
			<p>
				The community votes on the online forum to decide which research projects will be tested in the laboratory.
			</p>
			<br/>
			<em>
				Conduct the research in the laboratory
			</em>
			<br/>
			<p>
				Winning participants will join our experienced scientists to actually conduct the experiments for the top-voted research project in our synthetic biology laboratory!
			</p>
			<br/>
			<em>
				Sharing the results
			</em>
			<br/>
			<p>
				All results will be posted on the SynBio4all online forum giving the community an opportunity to help analyze and interpret the data. Once the top-voted project is completed, the cycle of turning ideas into projects will start again by voting on new projects!
			</p>
		</div>
	</div>
</div>

<div id="Bioethics" class='info_div arondit'>
	<div class="titre_infos" >
		<h2>Bioethics</h2>
	</div>
	<div class='info arondit' >
		<div class='text_info'>
			<p>
				Many concerns have been raised with the emergence of synthetic biology. These include potential harm by the organisms modified using synthetic biology to biodiversity, food, security, and the environment. It is the responsibility of the scientists researching synthetic biology to ensure that all current safety and environmental regulations are followed and that synthetic biology is used for the benefit of mankind. The participants from the SynBio4all forum will elaborate their study on risk assessment and human practice as an integral part of the research conception and practice processes. The selected project's team will be trained in laboratory safety and in understanding their social responsibility as synthetic biology researchers. 
			</p>
		</div>
	</div>
</div>

<div id="Who" class='info_div arondit'>
	<div class="titre_infos" >
		<h2>Who are we?</h2>
	</div>
	<div class='info arondit' >
		<div class='text_info'>
			<p>
				We are part of the <a href="http://citizencyberlab.eu/">Citizen Cyberlab</a> consortium stimulating creative learning for citizen scientists through active engagement in various cyberscience projects. 
			</p>
			<p>
				This platform is being developed at the <a href="http://www.cri-paris.org/en/cri/">Center for Research and Interdisciplinarity (CRI)</a>, which is a place designed to help creative students and researchers develop their own research projects with the support of mentors, research institutes, and foundations.  
			</p>
			<p>
				The CRI hosts our synthetic biology laboratory <a href="http://www.necker.fr/tamara/pages/lab.html">(U1001 unit of INSERM)</a> in <a href="http://www.univ-paris5.fr/">Paris-Decartes</a> University, and is the home of the award winning (U1001 unit of INSERM) in <a href="http://www.igem-paris.org/">Paris iGEM team</a> ! We are looking forward to having some of you at the CRI to conduct your synthetic biology research projects! 
			</p>
		</div>
	</div>
</div>

*/
if(isset($contents)){
    foreach ($contents as &$post) {
    ?> 
        <div class='info_div arondit'>
            <div class="titre_infos" >
                    <h2><?php echo $post->getTitle(); ?></h2>
            </div>
            <div class='info arondit' >
                    <div class='text_info'>
                            <p>
                                <?php echo $post->getData(); ?>
                            </p>
                    </div>
            </div>
        </div>
    <?php
    }
}
?>