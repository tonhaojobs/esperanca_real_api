<?php

	class AnnotationHashMatcher extends ParallelMatcher {
		protected function build() {
			$this->add(new AnnotationPairMatcher);
			$this->add(new AnnotationMorePairsMatcher);
		}
	}
