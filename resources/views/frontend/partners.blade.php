@extends('frontend.layouts.frontend')
@section('content')  
	<div class="home-generic">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
							<li><a href="{{ route('/') }}">Home</a></li>
							<li><a href="{{ route('about') }}">About</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="features" style="padding-bottom:30px;">
		<div class="container">
			<div class="row">				
				<div class="col"> 
						<div class="section_title_container text-center"> 
							<h2 class="section_title">Partners</h2>  
						</div>
				</div>				
			</div>
		</div>   
  </div> 

  <section class="container">
    <div class="row">
    <div id="tabs" class="ui-tabs ui-corner-all ui-widget ui-widget-content ui-tabs-vertical ui-helper-clearfix">
        <div class="col-md-3 col-sm-3 col-xs-12 tab-menu-content" style="float:left;">
          <div class="tab-heading">
            <ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
            <li role="tab" tabindex="0" class="ui-tabs-tab ui-state-default ui-tab ui-tabs-active ui-state-active ui-corner-left" aria-controls="tabs-AJO" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a class="current ui-tabs-anchor" href="#tabs-AJO" role="presentation" tabindex="-1" id="ui-id-1">Afghanistan Justice Organization (AJO)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-BISS" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-BISS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">Bangladesh Institute of International and Strategic Studies (BIISS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-BIPSS" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#tabs-BIPSS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">Bangladesh Institute of Peace and Security Studies (BIPSS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-CBS" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a href="#tabs-CBS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4">Centre for Bhutan Studies (CBS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-CDPS" aria-labelledby="ui-id-5" aria-selected="false" aria-expanded="false"><a href="#tabs-CDPS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-5">Centre For Development And Peace Studies (CDPS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-CSAS" aria-labelledby="ui-id-6" aria-selected="false" aria-expanded="false"><a href="#tabs-CSAS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-6">Centre For South Asian Studies (CSAS )</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-IPCS" aria-labelledby="ui-id-7" aria-selected="false" aria-expanded="false"><a href="#tabs-IPCS" style="display:none;" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-7">Institute Of Peace And Conflict Studies (IPCS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-LKIIRSS" aria-labelledby="ui-id-8" aria-selected="false" aria-expanded="false"><a href="#tabs-LKIIRSS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-8">The Lakshman Kadirgamar Institute For International Relations And Strategic Studies (LKIIRSS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-RCSS" aria-labelledby="ui-id-9" aria-selected="false" aria-expanded="false"><a href="#tabs-RCSS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-9">Regional Centre For Strategic Studies (RCSS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-KAS" aria-labelledby="ui-id-10" aria-selected="false" aria-expanded="false"><a href="#tabs-KAS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-10">Konrad-Adenauer- Sttiftung (KAS)</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-INSSSL" aria-labelledby="ui-id-11" aria-selected="false" aria-expanded="false"><a href="#tabs-INSSSL" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-11">The Institute of National Security Studies(INSSSL) </a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-state-default ui-tab ui-corner-left" aria-controls="tabs-ISAS" aria-labelledby="ui-id-12" aria-selected="false" aria-expanded="false"><a href="#tabs-ISAS" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-12">The Institute of South Asian Studies (ISAS)</a></li>
          </ul>
          </div>
      </div>
        <!-- tab menu ends -->
        <div class="col-md-9 col-sm-9 col-xs-12 tab-content-body" style="float:left;text-align: justify;"> 
        <div id="tabs-AJO" aria-labelledby="ui-id-1" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false">
            <h2>AFGHANISTAN JUSTICE ORGANIZATION (AJO)</h2>
            <p>Justice Organization is an Afghan-led, non-profit, and non-partisan organization inspired by Afghanistan's youth-the next 
            
            generation of Afghans responsible for Afghanistan's continued social and economic development. AJO seeks to empower 
            
            youth to take ownership of their country and make a difference in the lives of others through legal awareness, application of 
            
            the law, and freedom of choice.</p>
            <p> AJO is organized exclusively for the purpose of promoting legal reform through education and training and to advance free 
            
            markets and individual liberty under the laws of the Government of the Islamic Republic of Afghanistan.
            AJO’s purposes and aim is to improve and strengthen the formal justice institutions; improve and strengthen the informal 
            
            justice sector and establish a mechanism to link the formal and informal justice sectors; Conduct seminars, conferences, 
            
            and in-service training programs at the local, national, and international level to facilitate cooperation among Afghan- based 
            
            justice institutions; draft policy papers, publishing books and other conducting research and analysis on legal issues 
            
            concerning Afghanistan.</p>
            <p> AJO’s Strategic Studies Program acts as its platform forin-depth research, analyses, and publications on political, economic 
            
            and securityissues affecting Afghanistan and the South and Central Asian region.</p>
            <p> AJO’s also has a monthly magazine,‘Afghan Zariza’ (Afghan Millennium), which is a widely popular print and media 
            
            publication providing locals and international readers with access to timely reportage and analysis on Politics and Security, 
            
            Business and Economy, Law, Sports and Lifestyle.</p>
            <p> <a href="http://www.afghanjustice.org">http://www.afghanjustice.org</a></p>
          </div>
        <div id="tabs-BISS" aria-labelledby="ui-id-2" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Bangladesh Institute of International and Strategic Studies (BIISS) </h2>
            <p>Bangladesh Institute of International and Strategic Studies (BIISS) is a statutory and autonomous research institution established on 25 June 1978 by the Government of Bangladesh. The research activities of the Institute are carried out by the Research Faculty consisting of a team of full-time researchers with varied social sciences background. The Institute is organised along territorial and functional distribution of Divisions and Desks. There are five divisions in the Research Faculty: (i) Defence Studies; (ii) Non-traditional Security Studies; (iii) International Studies; (iv) Strategic Studies and (v) Peace and Conflict Studies.</p>
            <p> Major aims and objectives of the Institute includes: undertaking and promoting research in the areas of international relations, national issues and policies relating to security, defense and external relations. When required, the Institute assists the government in the planning, formulation and implementation of policies in the fields mentioned above. The institute also works as a center for documentation on international relations and seeks to maintain active contacts with similar institutes at home and abroad. The Institute arranges lectures, seminars and conferences to disseminate knowledge. The institute also publishes books, periodicals and reports on studies in the Institute, besides providing research Scholarships and Fellowships for studies relevant to the aims and objects of the Institute. </p>
            <p> he areas of interest include: foreign policy, security and strategic issues with specific relevance to Bangladesh. The institute also focuses on regional, sub regional, inter-regional and international cooperation; Non-traditional and emerging security issues; Resource management and sustainable development, economic liberalisation, trade and investment, governance and civil society; Conflict studies, peacekeeping, security of small states, disarmament, non-proliferation, global peace, and area studies.</p>
            <p> For more information about BIISS please visit: <a href="http://www.biiss.org">http://www.biiss.org</a>/ </p>
          </div>
        <div id="tabs-BIPSS" aria-labelledby="ui-id-3" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Bangladesh Institute of Peace and Security Studies (BIPSS)</h2>
            <p>Bangladesh Institute of Peace and Security Studies (BIPSS) is a non-party, non-profit organisation and independent think tank devoted to studying peace and security issues related to the South Asian region and beyond. It is a leading institution in Bangladesh for informed analysis on all aspects of broad spectrum of peace and security studies in the region and beyond. It has become one of the leading security think tanks in South Asia. It has emerged as a critical space for reflection, a forum for research, training, exchanges and dialogue between practitioners and academics at all levels. The institute seeks to bridge the gap between academic research and policy analysis within the context of Bangladesh and other countries of South Asia and beyond. It is a non party, nonprofit organization and independent think tank which provide significant platform for the leading strategic thinkers, academics, former members of the civil, foreign and armed services and media persons to chalk out a comprehensive framework for peace and security issues.</p>
            <p>BIPSS has also established two specialised centres within its framework named Bangladesh Centre for Terrorism Research (BCTR) and Bangladesh Centre for China Studies (BCCS). BCTR is the first centre of its kind in Bangladesh dedicated to the study and research on terrorism related issues. BCTR has been working in partnership with a number of international centres on terrorism research in South Asia, South East Asia, Europe and USA. On the other hand, Bangladesh Centre for China Studies (BCCS) has been established to understand study and analyse Chinese Foreign Policy and Chinese strategic and security posture. It also aims to study Chinese economic advancement with a view to advocating greater economic and development cooperation between Bangladesh and China as well as China and the Greater South Asian region.</p>
            <p> For more information about BIPSS please visit: <a href="http://www.bipss.org.bd">www.bipss.org.bd</a> </p>
          </div>
        <div id="tabs-CBS" aria-labelledby="ui-id-4" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Centre for Bhutan Studies (CBS)</h2>
            <p>The Centre for Bhutan Studies and GNH Research was established in November 1998 as a multi- disciplinary institute for 
            
            social science and public policy studies. It is the only such think tank in the country and undertakes studies in three areas: 
            
            cultural and historical studies, policy background studies and Gross National Happiness.</p>
            <p>The institute conducts evaluative studies on existing programmes of the government and provides feedback on the basis of 
            
            which the Royal Government can improve programmes and policies. It supports basic research by other agencies in 
            
            Bhutan. The institute conducts inter-disciplinary studies of Bhutan in its social, cultural, and economics aspects, focusing 
            
            largely, but not exclusively, on contemporary issues. Besides, the institute acts as a clearing-house of information on 
            
            various studies and researches being conducted in Bhutan and abroad by foreign institutes. Within Bhutan, the Centre 
            
            maintains a close research alliance with other people and institutes engaged in similar activities. The Centre also generates 
            
            programme proposals or writings, as assigned by the Council for the Centre. Among other things, it hosts special lectures 
            
            and seminars on themes related to its charge by Bhutanese, and by foreign scholars who visit Bhutan for whatever 
            
            reasons. The Centre commissions studies or research by Bhutanese scholars, publishes the Journal of Bhutan Studies 
            
            (annual publication), encourages participation of younger scholars in research. In totality, the institute serves as a vehicle to 
            
            train individuals in research skills to analyse, in particular, contemporary issues.</p>
            <p> For more information about CBS please visit: <a href="http://www.bhutanstudies.org.bt">http://www.bhutanstudies.org.bt/</a></p>
          </div>
        <div id="tabs-CDPS" aria-labelledby="ui-id-5" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Centre for Development and Peace Studies (CDPS)</h2>
            <p>The Centre for Development and Peace Studies (www.cdpsindia.org) is an independent research centre based at 
            
            Guwahati, capital of Assam, in northeastern India. The Centre comprises a core group that is a mix of senior editors, 
            
            academics, prominent cultural personalities, economists and development experts. The Centre for Development and 
            
            Peace Studies (CDPS) is an independent research center, registered in 2004 as a non-profit society with the Registrar of 
            
            Societies, Government of Assam, in northeastern India (registration number: KAM/240/T/04 of 2004-2005). Based at 
            
            Guwahati, capital of Assam, the Centre comprises a core group that is a mix of senior working journalists, prominent 
            
            cultural personalities, besides academics, economists and development experts.</p>
            <p>CDPS is involved in carrying out meaningful research and writings on the micro and macro-level issues in the fields of 
            
            development, peace and security in India's Northeast, highlighting efforts and success stories in peace making, drawing up 
            
            linkages between development and security, and suggesting measures to tackle the imbalances. Aside from close 
            
            interaction with the Government and non-governmental organizations working in the area, CDPS works in tandem with the 
            
            media to reach out to the masses, besides sensitizing journalists on the need to shift their focus from violence to 
            
            development and peace writings. The Centre, through its various studies, assesses the impact of existing development 
            
            programmes and policies of the Government towards the northeastern frontier, and highlighting gaps, if any, and 
            
            recommending alternative measures wherever necessary.</p>
            <p> For more information about CDPS please visit: <a href="http://www.cdpsindia.org">http://www.cdpsindia.org</a>/</p>
          </div>
        <div id="tabs-CSAS" aria-labelledby="ui-id-6" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Centre for South Asian Studies (CSAS ) </h2>
            <p>Centre for South Asian Studies is a premier think-tank in Nepal. It organizes seminars and conferences and publishes 
            
            books on issues of vital importance to Nepal. SAARC and regional cooperation in South Asia has been its forte�. The 
            
            Centre for South Asian Studies (CSAS) is a fully independent, non-political, secular, research think-tank based in 
            
            Kathmandu, Nepal. It organizes conferences and conducts research in areas of South Asian regional cooperation, peace 
            
            and conflict in South Asia, small arms proliferation, trade and connectivity and strategic issues concerning South Asian 
            
            countries as well as Nepal's conduct of international relations. CSAS is also involved in research, dissemination and 
            
            deliberation on Nepal's current peace process and constitution drafting with several programs on federalism and 
            
            integration. In partnership with the Konrad Adenauer Stiftung, a German political foundation, CSAS has been implementing 
            
            'Nepal's National Interests' project for the year 2010.</p>
            <p>CSAS is a founder member of the South Asian Regional Research Forum (SARRF), led by BIPSS, Dhaka. - CSAS is a 
            
            founder member of the Nepal Security Sector network (NSSN), Kathmandu.</p>
            <p> For more information about CSAS please visit: <a href="http://www.csas.org.np">http://www.csas.org.np</a></p>
          </div>
        <div id="tabs-IPCS" aria-labelledby="ui-id-7" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Institute of Peace and Conflict Studies (IPCS)</h2>
            <p>Institute of Peace and Conflict Studies (IPCS), founded in 1996, is a premier South Asian think tank which conducts 
            
            independent research on and provides an in-depth analysis of conventional and non- conventional issues related to 
            
            national and South Asian security including nuclear issues, disarmament, non-proliferation, weapons of mass destruction, 
            
            the war on terrorism, counter terrorism and armed conflict and peace processes in the region. The research at the institute 
            
            promotes greater understanding of India's foreign policy especially India-China relations, India's relations with SAARC 
            
            countries and South East Asia. Through close interaction with leading strategic thinkers, former members of the Indian 
            
            Administrative Service, the Foreign Service and the three wings of the Armed Forces - the Indian Army, Indian Navy, and 
            
            Indian AirThe Force, - the academic community as well as the media, the IPCS has contributed considerably to the strategic 
            
            discourse in India.</p>
            <p>The Institute conducts independent research on conventional and non-conventional security issues in the region and 
            
            shares its findings with policy makers and the public. It provides a forum for discussion with the strategic community on 
            
            strategic issues and strives to explore alternatives. Moreover, it works towards building capacity among young scholars for 
            
            greater refinement of their analyses of South Asian security. Research carried out by IPCS is organized between three 
            
            programmes and one Centre.</p>
            <p> For more information about IPCS please visit: <a href="http://www.ipcs.org">http://www.ipcs.org</a></p>
          </div>
        <div id="tabs-LKIIRSS" aria-labelledby="ui-id-8" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>The Lakshman Kadirgamar Institute for International Relations and Strategic Studies (LKIIRSS)</h2>
            <p> The Lakshman Kadirgamar Institute for International Relations and Strategic Studies (LKIIRSS) is a multi-disciplinary 
            
            research forum dedicated to analyzing Sri Lanka’s strategic interests in the realm of international relations, within both the 
            
            contemporary domestic and global contexts. The Institute, which is chaired by the incumbent Minister of External Affairs of 
            
            Sri Lanka, was officially inaugurated on August 10th, 2006.</p>
            <p>The Institute functions as a forum for the generation of research and analysis, with a view to providing an input to national 
            
            policy formulation. Its mandate includes; promotion of peace, collection of data for the Government of Sri Lanka on issues 
            
            pertaining to the formulation and structuring of national policies, promotion and assistance in research pertaining to Sri 
            
            Lanka and its region, publication of material falling into the purview of the Institute, as well as training programmes on 
            
            diplomacy and international relations.</p>
            <p> For more details about LKIIRSS, please visit: <a href="https://www.lki.lk/">http://https://www.lki.lk/</a></p>
          </div>
        <div id="tabs-RCSS" aria-labelledby="ui-id-9" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Regional Centre for Strategic Studies (RCSS)</h2>
            <p> The Regional Centre for Strategic Studies (RCSS) is a South Asian regional think tank based in Colombo, Sri Lanka. 
            
            Established in 1993, it is an independent, non-profit and non-governmental organization which encourages research, 
            
            dialogue, and deliberation on a broad range of conventional and non- conventional sources of conflict. The RCSS enables 
            
            scholars and other professionals to address, individually and collectively, problems and issues of topical interest for all 
            
            South Asian countries. </p>
            <p>The Centre's key objectives are to: Sponsor, coordinate, and support research on South Asian strategic, security, and 
            
            environmental issues, to promote interaction among scholars and professionals in the region and beyond who are 
            
            engaged in South Asian studies, to foster linkages and collaboration among institutions focusing on studies and activities 
            
            related to conflict, conflict transformation, and regional cooperation in South Asia and to encourage a new generation of 
            
            analysts and commentators to generate fresh.</p>
            <p>Some of the principal focus areas of the Centre are: recent trends in thinking and approaches to strategic studies, arms 
            
            control and disarmament, proliferation of nuclear weapons, conflicts in inter- state relations and implications for regional 
            
            cooperation, external factors in the security and stability of the region, refugees and migration etc..</p>
            <p> For more information about RCSS please visit: <a href="https://rcss.org/">https://rcss.org/</a></p>
          </div>
        <div id="tabs-KAS" aria-labelledby="ui-id-10" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>Konrad-Adenauer-Stiftung (KAS)</h2>
            <p>The Konrad-Adenauer-Stiftung (KAS) is a German political foundation founded in 1962 and funded by the Ministry of 
            
            Economic Cooperation and Development of the Federal Republic of Germany. The KAS follows the spirit of its name giver 
            
            Konrad Adenauer, the first Chancellor of the Federal Republic of Germany, in fostering democracy and the rule of law, 
            
            implementing social and market-economic structures and promoting human rights. With its worldwide networks to the 
            
            political and social elites and with its long-term partner structures, it participates in shaping policy in developing and 
            
            emerging countries.</p>
            <p>By training and educating young professionals, the KAS promotes the developing process in social groups and political 
            
            parties. Currently the KAS hosts more than 200 projects in around 120 countries on four continents with 81 field offices. The 
            
            emphases of our work in Asia cover the support of current democratization processes and good governance, the 
            
            intensification of the dialogue between Europe, Germany, SAARC and ASEAN, the reduction of the social consequences of 
            
            economic growth, a continuation of ongoing value dialogues and a cultural exchange of ideas as well as strategic 
            
            dialogues about common matters of foreign and security politics.</p>
            <p> For more information about KAS please visit: <a href="https://www.kas.de/web/politikdialog-asien/home">https://www.kas.de/web/politikdialog-asien/home</a>/</p>
          </div>



        <div id="tabs-INSSSL" aria-labelledby="ui-id-11" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>The Institute of National Security Studies(INSSSL)</h2><br>
            The Institute of National Security Studies(INSSSL) is the premiere national defence think tank of Sri Lanka under the Ministry of Defence. Established to understand the security environment and to work with government to craft evidence based policy options and strategies for debate and discussion to ensure national security. The institute will conduct a broad array of national security research for the Ministry of Defence. 
            <br>
            Its Vision is “To improve policy and decision making through high quality research and analysis with excellence”. Its Mission is “From high quality research to continuously support ministry of defence mission “formulating and executing strategic plans and policies for a secure, safe and sovereign country with territorial integrity” 
            <br>
            <br>

            <strong>INSSSL is setup with the objectives: </strong>

            <br>
            To provide sound and timely assessment on facets of national security to secure Sri Lanka from threats to its national security 

            <br>
            To serve as a platform for government, private sector and civil society to collaborate debate and discuss issues affecting Sri Lanka’s security and stability to synergize and draw from a spectrum of thinkers and planners 

            <br>
            To serve as a nucleus for deliberations and as a capacity builder for strengthening institutions on national security aspects 

            <br>
            To serve as a central repository of knowledge for both scholars and practitioners committed to the nation’s unity and harmony 
            <br>
            The Board of Governors include His Excellency the President Maithripala Sirisena President/Patron of INSSSL, Chairman of the Institute is Kapila Waidyaratne PC the Secretary of Defence along with other board members including Chief of Defense Staff and Commanders of the three Armed Forces. INSSSL Director General is Asanga Abeyagoonasekera. 
            <br>
            Contact: inss.srilanka@gmail.com

            <p> For more information about INSSSL please visit: <a href="http://www.insssl.lk/insssl.php">http://www.insssl.lk/insssl.php</a>/</p>

          </div>


        <div id="tabs-ISAS" aria-labelledby="ui-id-12" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
            <h2>The Institute of South Asian Studies (ISAS) </h2><br>

            <strong>Background&ZeroWidthSpace;&ZeroWidthSpace;</strong><br>

            The Institute of South Asian Studies (ISAS) was established in July 2004 as an autonomous research institute at the National University of Singapore (NUS).<br>
            The establishment of ISAS reflects the increasing economic and political importance of South Asia, and the strong historical links between South Asia and Southeast Asia.<br><br>

            <strong>Mission</strong><br>

            ISAS is dedicated to research on contemporary South Asia. The Institute seeks to promote understanding of this vital region of the world, and to communicate knowledge and insights about it to policy makers, the business community, academia and civil society, in Singapore and beyond.
            <br><br>
            <strong>Logo</strong><br>

            The ISAS logo consists of three stylised circles that are dark red and of different sizes. These circles, which are in motion, show ISAS' pro-activeness in promoting and developing research on contemporary South Asia. The different sizes reflect the variety of perspectives and processes that underpin ISAS' approach in highlighting the economic, political and social importance of South Asia. The colour, dark red, represents ISAS' core values of strength, stability and vibrancy; while the grey reflects corporate identity, convention and formality. The union of these circles with 'ISAS' shows the Institute's efforts to integrate its research and understanding of South Asia to the development of Singapore and the relationships between South Asia and Southeast Asia, and within South Asia itself.&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;<br><br>
          </div>
 







      </div>
        <!-- tab content ends --> 
      </div>
    <!-- tabs ends --> 
  </div>
    <!-- end of row--> 
  </section>        
	@endsection