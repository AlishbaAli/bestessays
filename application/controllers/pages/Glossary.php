<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glossary extends Front_Controller {
	
	public function __construct()
    {
        parent::__construct();
       // $this->load->model('About_model');
    }

	public function apa()
	{
		
		$this->data['title'] = 'Apa';

		$this->load->front_template_glossary('pages/glossary/apa',$this->data);
		
	}
	public function abstract_()
	{
		
		$this->data['title'] = 'Abstract';

		$this->load->front_template_glossary('pages/glossary/abstract',$this->data);
		
	}
	public function admission_essay()
	{
		
		$this->data['title'] = 'Admission Essay';

	$this->load->front_template_glossary('pages/glossary/admission_essay',$this->data);
		
	}

	public function annotated_bibliography()
	{
		
		$this->data['title'] = 'Annotated Bibliography';

	$this->load->front_template_glossary('pages/glossary/annotated_bibliography',$this->data);
		
	}
public function application_essay()
	{
		
		$this->data['title'] = 'Application Essay';

	$this->load->front_template_glossary('pages/glossary/application_essay',$this->data);
		
	}
	public function argumentation()
	{
		
		$this->data['title'] = 'Argumentation';

	$this->load->front_template_glossary('pages/glossary/argumentation',$this->data);
		
	}
public function argumentative_essay()
	{
		
	$this->data['title'] = 'Argumentative Essay';

   $this->load->front_template_glossary('pages/glossary/argumentative_essay',$this->data);
		
	}
public function article_critique()
	{
		
	$this->data['title'] = 'Article Critique';

   $this->load->front_template_glossary('pages/glossary/article_critique',$this->data);
		
	}
	public function assignments()
	{
		
		$this->data['title'] = 'Assignments';

	$this->load->front_template_glossary('pages/glossary/assignments',$this->data);
		
	}

	public function bibliography()
	{
		
		$this->data['title'] = 'Bibliography';

	$this->load->front_template_glossary('pages/glossary/bibliography',$this->data);
		
	}

	public function book_report()
	{
		
		$this->data['title'] = 'Book Report';

	$this->load->front_template_glossary('pages/glossary/book_report',$this->data);
		
	}

	public function book_review()
	{
		
		$this->data['title'] = 'Book Review';

	$this->load->front_template_glossary('pages/glossary/book_review',$this->data);
		
	}

		public function cbep()
	{
		
		$this->data['title'] = 'CBEP';

	$this->load->front_template_glossary('pages/glossary/cbep',$this->data);
		
	}


	public function cse()
	{
		
		$this->data['title'] = 'CSE';

	$this->load->front_template_glossary('pages/glossary/cse',$this->data);
		
	}	

	public function case_study()
	{
		
		$this->data['title'] = 'Case Study';

	$this->load->front_template_glossary('pages/glossary/case_study',$this->data);
		
	}

	public function cause_and_effect_essays()
	{
		
		$this->data['title'] = 'Cause And Effect Essays';

	$this->load->front_template_glossary('pages/glossary/cause_and_effect_essays',$this->data);
		
	}		
	public function character_analysis_essay()
	{
		
		$this->data['title'] = 'Character Analysis Essay';

	$this->load->front_template_glossary('pages/glossary/character_analysis_essay',$this->data);
		
	}	


		public function classification_essay()
	{
		
		$this->data['title'] = 'Classification Essay';

	$this->load->front_template_glossary('pages/glossary/classification_essay',$this->data);
		
	}	

		public function college_application_essay()
	{
		
		$this->data['title'] = 'College Application Essay';

	$this->load->front_template_glossary('pages/glossary/college_application_essay',$this->data);
		
	}


		public function comparison_and_contrast_essay()
	{
		
		$this->data['title'] = 'Comparison And Contrast Essay';

	$this->load->front_template_glossary('pages/glossary/comparison_and_contrast_essay',$this->data);
		
	}
	public function coursework()
	{
		
		$this->data['title'] = 'Course Work';

	$this->load->front_template_glossary('pages/glossary/coursework',$this->data);
		
	}

	public function cover_letter()
	{
		
		$this->data['title'] = 'Cover Letter';

	$this->load->front_template_glossary('pages/glossary/cover_letter',$this->data);
		
	}


public function critical_essay()
	{
		
		$this->data['title'] = 'Critical Essay';

	$this->load->front_template_glossary('pages/glossary/critical_essay',$this->data);
		
	}

	public function deductive_essay()
	{
		
		$this->data['title'] = 'Deductive Essay';

	$this->load->front_template_glossary('pages/glossary/deductive_essay',$this->data);
		
	}
	public function definition_essay()
	{
		
		$this->data['title'] = 'Definition Essay';

	$this->load->front_template_glossary('pages/glossary/definition_essay',$this->data);
		
	}

	public function descriptive_essay()
	{
		
		$this->data['title'] = 'Descriptive Essay';

	$this->load->front_template_glossary('pages/glossary/descriptive_essay',$this->data);
		
	}

	public function discussion()
	{
		
		$this->data['title'] = 'Discussion';

	$this->load->front_template_glossary('pages/glossary/discussion',$this->data);
		
	}

public function dissertation()
	{
		
		$this->data['title'] = 'Dissertation';

	$this->load->front_template_glossary('pages/glossary/dissertation',$this->data);
		
	}
	public function dissertation_proposal()
	{
		
		$this->data['title'] = 'Dissertation Proposal';

	$this->load->front_template_glossary('pages/glossary/dissertation_proposal',$this->data);
		
	}

	public function dissertation_chapter()
	{
		
		$this->data['title'] = 'Dissertation Chapter';

	$this->load->front_template_glossary('pages/glossary/dissertation_chapter',$this->data);
		
	}
public function editing()
	{
		
		$this->data['title'] = 'Editing';

	$this->load->front_template_glossary('pages/glossary/editing',$this->data);
		
	}

	public function essay()
	{
		
		$this->data['title'] = 'Essay';

	$this->load->front_template_glossary('pages/glossary/essay',$this->data);
		
	}
public function evaluation_essays()
	{
		
		$this->data['title'] = 'Evaluation Essay';

	$this->load->front_template_glossary('pages/glossary/evaluation_essays',$this->data);
		
	}

	public function exploratory_essay()
	{
		
		$this->data['title'] = 'Exploratory Essay';

	$this->load->front_template_glossary('pages/glossary/exploratory_essay',$this->data);
		
	}

	public function expository_essay()
	{
		
		$this->data['title'] = 'Expository Essay';

	$this->load->front_template_glossary('pages/glossary/expository_essay',$this->data);
		
	}
public function five_paragraphs_essays()
	{
		
		$this->data['title'] = 'Five Paragraph Essay';

	$this->load->front_template_glossary('pages/glossary/five_paragraphs_essays',$this->data);
		
	}
	public function font()
	{
		
		$this->data['title'] = 'Font';

	$this->load->front_template_glossary('pages/glossary/font',$this->data);
		
	}

	public function footnotes()
	{
		
		$this->data['title'] = 'Footnotes';

	$this->load->front_template_glossary('pages/glossary/footnotes',$this->data);
		
	}
		public function format()
	{
		
		$this->data['title'] = 'Format';

	$this->load->front_template_glossary('pages/glossary/format',$this->data);
		
	}
		public function harvard()
	{
		
		$this->data['title'] = 'Harvard';

	$this->load->front_template_glossary('pages/glossary/harvard',$this->data);
		
	}

		public function improper_paraphrase()
	{
		
		$this->data['title'] = 'Improper Paraphrase';

	$this->load->front_template_glossary('pages/glossary/improper_paraphrase',$this->data);
		
	}

		public function informal_essay()
	{
		
		$this->data['title'] = 'Informal Essay';

	$this->load->front_template_glossary('pages/glossary/informal_essay',$this->data);
		
	}
		public function informational_interviews()
	{
		
		$this->data['title'] = 'Informational Interviews';

	$this->load->front_template_glossary('pages/glossary/informational_interviews',$this->data);
		
	}
	
		public function interview_essay()
	{
		
		$this->data['title'] = 'Interview Essay';

	$this->load->front_template_glossary('pages/glossary/interview_essay',$this->data);
		
	}


		public function introduction_chapter()
	{
		
		$this->data['title'] = 'Introduction Chapter';

	$this->load->front_template_glossary('pages/glossary/introduction_chapter',$this->data);
		
	}
	

		public function lab_report()
	{
		
		$this->data['title'] = 'Lab Report';

	$this->load->front_template_glossary('pages/glossary/lab_report',$this->data);
		
	}

		public function literature_review()
	{
		
		$this->data['title'] = 'Literature Review';

	$this->load->front_template_glossary('pages/glossary/literature_review',$this->data);
		
	}

		public function margins()
	{
		
		$this->data['title'] = 'Margins';

	$this->load->front_template_glossary('pages/glossary/margins',$this->data);
		
	}

		public function methodology()
	{
		
		$this->data['title'] = 'Methodology';

	$this->load->front_template_glossary('pages/glossary/methodology',$this->data);
		
	}

		public function moview_review()
	{
		
		$this->data['title'] = 'Moview Review';

	$this->load->front_template_glossary('pages/glossary/movie_review',$this->data);
		
	}
	public function multiple_choice_questions()
	{
		
		$this->data['title'] = 'Multiple Choice Questions';

	$this->load->front_template_glossary('pages/glossary/multiple_choice_questions',$this->data);
		
	}

	public function narrative_essay()
	{
		
		$this->data['title'] = 'Narrative Essay';

	$this->load->front_template_glossary('pages/glossary/narrative_essay',$this->data);
		
	}
	public function observation_essay()
	{
		
		$this->data['title'] = 'Observation Essay';

	$this->load->front_template_glossary('pages/glossary/observation_essay',$this->data);
		
	}
	public function oxford()
	{
		
		$this->data['title'] = 'Oxford';

	$this->load->front_template_glossary('pages/glossary/oxford',$this->data);
		
	}
	public function page_headers()
	{
		
		$this->data['title'] = 'Page Headers';

	$this->load->front_template_glossary('pages/glossary/page_headers',$this->data);
		
	}
	public function paragraphs()
	{
		
		$this->data['title'] = 'Paragraphs';

	$this->load->front_template_glossary('pages/glossary/paragraphs',$this->data);
		
	}
	public function personal_essay()
	{
		
		$this->data['title'] = 'Personal Essay';

	$this->load->front_template_glossary('pages/glossary/personal_essay',$this->data);
		
	}
	public function personal_statemnet()
	{
		
		$this->data['title'] = 'Personal Statement';

	$this->load->front_template_glossary('pages/glossary/personal_essay',$this->data);
		
	}
	public function persuasive_essay()
	{
		
		$this->data['title'] = 'Persuasive Essay';

	$this->load->front_template_glossary('pages/glossary/persuasive_essay',$this->data);
		
	}
	public function preferred_writers_id()
	{
$this->data['title'] = 'Preferred Writer id';

	$this->load->front_template_glossary('pages/glossary/preferred_writers_id',$this->data);
	}
	public function presentation()
	{
$this->data['title'] = 'Presentation';

	$this->load->front_template_glossary('pages/glossary/presentation',$this->data);
	}
	public function process_essay()
	{
$this->data['title'] = 'Process Essay';

	$this->load->front_template_glossary('pages/glossary/process_essay',$this->data);
	}
	public function proofreading()
	{
$this->data['title'] = 'Proofreading';

	$this->load->front_template_glossary('pages/glossary/proofreading',$this->data);
	}
	public function proposals()
	{
$this->data['title'] = 'Proposals';

	$this->load->front_template_glossary('pages/glossary/proposals',$this->data);
	}

	public function reaction_paper()
	{
$this->data['title'] = 'Reaction Paper';

	$this->load->front_template_glossary('pages/glossary/reaction_paper',$this->data);
	}

	public function research_essay()
	{
$this->data['title'] = 'Research Essay';

	$this->load->front_template_glossary('pages/glossary/research_essay',$this->data);
	}

	public function research_paper()
	{
$this->data['title'] = 'Research Paper';

	$this->load->front_template_glossary('pages/glossary/research_paper',$this->data);
	}
public function research_proposal()
	{
$this->data['title'] = 'Research Proosal';

	$this->load->front_template_glossary('pages/glossary/research_proposal',$this->data);
	}

	public function response_essay()
	{
$this->data['title'] = 'Response Essay';

	$this->load->front_template_glossary('pages/glossary/response_essay',$this->data);
	}
	public function review_essay()
	{
$this->data['title'] = 'Review Essay';

	$this->load->front_template_glossary('pages/glossary/review_essay',$this->data);
	}
	public function scholarship_essay()
	{
$this->data['title'] = 'Scholarship Essay';

	$this->load->front_template_glossary('pages/glossary/scholarship_essay',$this->data);
	}
	public function statistic_project()
	{
$this->data['title'] = 'Statistic Project';

	$this->load->front_template_glossary('pages/glossary/statistic_project',$this->data);
	}
public function term_paper()
	{
$this->data['title'] = 'Term Paper';

	$this->load->front_template_glossary('pages/glossary/term_paper',$this->data);
	}
	public function text_alignment()
	{
$this->data['title'] = 'Text Alignment';

	$this->load->front_template_glossary('pages/glossary/text_alignment',$this->data);
	}
	public function thesis()
	{
$this->data['title'] = 'Thesis';

	$this->load->front_template_glossary('pages/glossary/thesis',$this->data);
	}
	public function thesis_proposal()
	{
$this->data['title'] = 'Thesis Proposal';

	$this->load->front_template_glossary('pages/glossary/thesis_proposal',$this->data);
	}
	public function vip_support()
	{
$this->data['title'] = 'VIP Support';

	$this->load->front_template_glossary('pages/glossary/vip_support',$this->data);
	}
	public function vancouver()
	{
$this->data['title'] = 'Vancouver';

	$this->load->front_template_glossary('pages/glossary/vancouver',$this->data);
	}
	public function Word_count()
	{
$this->data['title'] = 'Word Count';

	$this->load->front_template_glossary('pages/glossary/word_Count',$this->data);
	}
}